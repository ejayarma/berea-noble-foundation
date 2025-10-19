<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\Album;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;


class GalleryPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request): Response
    {
        $category = $request->get('category', 'all');
        $albumId = $request->get('album');

        $albums = Album::query()->published()
            ->byCategory($category)
            ->ordered()
            ->withCount('publishedPhotos')
            ->get()
            ->map(function ($album) {
                return [
                    'id' => (string) $album->id,
                    'title' => $album->title,
                    'description' => $album->description,
                    'cover_image' => $album->cover_image_url,
                    'photo_count' => $album->published_photos_count,
                    'category' => $album->category,
                    'created_at' => $album->created_at->toDateString(),
                ];
            });

        $photos = [];
        $selectedAlbum = null;

        if ($albumId) {
            $album = Album::query()->published()->findOrFail($albumId);
            $selectedAlbum = (string) $album->id;

            $photos = $album->publishedPhotos()
                ->ordered()
                ->get()
                ->map(function ($photo) {
                    return [
                        'id' => (string) $photo->id,
                        'src' => $photo->src,
                        'alt' => $photo->alt,
                        'title' => $photo->title,
                        'category' => $photo->category,
                        'album_id' => (string) $photo->album_id,
                    ];
                });
        }

        return Inertia::render('Gallery', [
            'albums' => $albums,
            'photos' => $photos,
            'initialCategory' => $category,
            'selectedAlbumId' => $selectedAlbum,
            'view' => $albumId ? 'photos' : 'albums',
        ]);
    }

    public function album(Album $album): Response
    {
        $album->load('publishedPhotos');

        $photos = $album->publishedPhotos->map(function ($photo) {
            return [
                'id' => (string) $photo->id,
                'src' => $photo->src,
                'alt' => $photo->alt,
                'title' => $photo->title,
                'category' => $photo->category,
                'album_id' => (string) $photo->album_id,
            ];
        });

        return Inertia::render('Gallery', [
            'albums' => [],
            'photos' => $photos,
            'selectedAlbumId' => (string) $album->id,
            'view' => 'photos',
        ]);
    }
}
