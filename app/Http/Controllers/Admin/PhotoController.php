<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Photo;
use App\Models\Admin\Album;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class PhotoController extends Controller
{
    public function store(Request $request, Album $album): RedirectResponse
    {
        $validated = $request->validate([
            'photos' => 'required|array',
            'photos.*' => 'image|max:10240', // 10MB
            'title' => 'nullable|string|max:255',
            'alt_text' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'is_published' => 'boolean',
        ]);

        $uploadedCount = 0;

        foreach ($request->file('photos') as $index => $file) {
            // Store original image
            $path = $file->store('gallery/photos', 'public');

            // Create thumbnail
            $thumbnailPath = $this->createThumbnail($file, $path);

            // Get image dimensions
            $imageSize = getimagesize($file->getRealPath());

            Photo::create([
                'album_id' => $album->id,
                'title' => $validated['title'] ?? 'Photo ' . ($index + 1),
                'alt_text' => $validated['alt_text'] ?? null,
                'description' => $validated['description'] ?? null,
                'file_path' => $path,
                'thumbnail_path' => $thumbnailPath,
                'category' => $album->category,
                'file_size' => $file->getSize(),
                'mime_type' => $file->getMimeType(),
                'width' => $imageSize[0] ?? null,
                'height' => $imageSize[1] ?? null,
                'is_published' => $validated['is_published'] ?? true,
                'sort_order' => $album->photos()->max('sort_order') + 1,
            ]);

            $uploadedCount++;
        }

        return back()->with('success', "$uploadedCount photo(s) uploaded successfully.");
    }

    public function update(Request $request, Photo $photo): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'alt_text' => 'nullable|string',
            'description' => 'nullable|string',
            'is_published' => 'boolean',
            'sort_order' => 'nullable|integer',
        ]);

        $photo->update($validated);

        return back()->with('success', 'Photo updated successfully.');
    }

    public function destroy(Photo $photo): RedirectResponse
    {
        // Delete files
        Storage::disk('public')->delete($photo->file_path);
        if ($photo->thumbnail_path) {
            Storage::disk('public')->delete($photo->thumbnail_path);
        }

        $photo->delete();

        return back()->with('success', 'Photo deleted successfully.');
    }

    public function reorder(Request $request, Album $album): RedirectResponse
    {
        $validated = $request->validate([
            'photos' => 'required|array',
            'photos.*.id' => 'required|exists:photos,id',
            'photos.*.sort_order' => 'required|integer',
        ]);

        foreach ($validated['photos'] as $photoData) {
            Photo::where('id', $photoData['id'])
                ->where('album_id', $album->id)
                ->update(['sort_order' => $photoData['sort_order']]);
        }

        return back()->with('success', 'Photos reordered successfully.');
    }

    private function createThumbnail($file, string $originalPath): string
    {
        $thumbnailPath = 'gallery/thumbnails/' . basename($originalPath);

        $manager = new ImageManager(
            new Driver()
        );
        $image = $manager->read($file->getRealPath())
            ->scale(400, 300)
            ->encode();

        Storage::disk('public')->put($thumbnailPath, $image);

        return $thumbnailPath;
    }
}
