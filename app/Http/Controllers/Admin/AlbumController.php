<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class AlbumController extends Controller
{
    public function index(): Response
    {
        $albums = Album::withCount('photos')
            ->ordered()
            ->paginate(20);

        return Inertia::render('Admin/Albums/Index', [
            'albums' => $albums,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Admin/Albums/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'description' => 'nullable|string',
            'category' => ['nullable', 'string', 'max:255'],
            'cover_image' => 'nullable|image|max:5120', // 5MB
            'is_published' => 'boolean',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')
                ->store('gallery/covers', 'public');
        }

        $album = Album::create($validated);

        return redirect()->route('admin.albums.show', $album)
            ->with('success', 'Album created successfully.');
    }

    public function show(Album $album): Response
    {
        $album->load(['photos' => function ($query) {
            $query->ordered();
        }]);

        return Inertia::render('Admin/Albums/Show', [
            'album' => $album,
        ]);
    }

    public function edit(Album $album): Response
    {
        return Inertia::render('Admin/Albums/Edit', [
            'album' => $album,
        ]);
    }

    public function update(Request $request, Album $album): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:255',
            'cover_image' => 'nullable|image|max:5120',
            'is_published' => 'boolean',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('cover_image')) {
            // Delete old cover image
            if ($album->cover_image) {
                Storage::disk('public')->delete($album->cover_image);
            }

            $validated['cover_image'] = $request->file('cover_image')
                ->store('gallery/covers', 'public');
        }

        $album->update($validated);

        return redirect()->route('admin.albums.show', $album)
            ->with('success', 'Album updated successfully.');
    }

    public function destroy(Album $album): RedirectResponse
    {
        // Delete cover image
        if ($album->cover_image) {
            Storage::disk('public')->delete($album->cover_image);
        }

        // Photos will be cascade deleted by the database
        $album->delete();

        return redirect()->route('admin.albums.index')
            ->with('success', 'Album deleted successfully.');
    }

    public function reorder(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'albums' => 'required|array',
            'albums.*.id' => 'required|exists:albums,id',
            'albums.*.sort_order' => 'required|integer',
        ]);

        foreach ($validated['albums'] as $albumData) {
            Album::where('id', $albumData['id'])
                ->update(['sort_order' => $albumData['sort_order']]);
        }

        return back()->with('success', 'Albums reordered successfully.');
    }
}
