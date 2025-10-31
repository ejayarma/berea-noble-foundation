<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\Album;
use App\Models\Admin\GalleryCategory;
use App\Models\Admin\Photo;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Storage;


class GalleryPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request): Response
    {
        $category = $request->get('category', 'all');
        $albumSlug = $request->get('album');

        $categories = GalleryCategory::query()
            ->get()
            ->map(function ($cat) {
                return [
                    'id' => $cat->id,
                    'name' => $cat->name,
                    'slug' => $cat->slug,
                ];
            });

        $albums = Album::query()
            ->published()
            ->byCategory($category)
            ->ordered()
            ->withCount('publishedPhotos')
            ->with('category')
            ->get()
            ->map(function ($album) {
                return [
                    'id' => $album->id,
                    'title' => $album->title,
                    'description' => $album->description,
                    'slug' => $album->slug,
                    'cover_image' => $album->cover_image_url,
                    'photo_count' => $album->published_photos_count,
                    'category' => $album->category->slug,
                    'created_at' => $album->created_at->toDateString(),
                ];
            });

        $photos = [];
        $selectedAlbum = null;

        if ($albumSlug) {
            $album = Album::query()->published()->firstWhere('slug', $albumSlug);
            $selectedAlbum = $album->slug;

            $photos = $album->publishedPhotos()
                ->ordered()
                ->get()
                ->map(function ($photo) use ($album) {
                    return [
                        'id' => $photo->id,
                        'src' => Storage::url($photo->image),
                        'alt' => $photo->description,
                        'title' => $photo->description,
                        'category' => $album->category->slug,
                        'album_id' => (int) $photo->album_id,
                    ];
                });
        } else {
            $photos = Photo::query()->published()
                ->get()
                ->filter(function ($photo) use ($category) {
                    return $category === 'all' || $category === $photo->album->category->slug;
                })
                ->map(function ($photo) {
                    return [
                        'id' => $photo->id,
                        'src' => Storage::url($photo->image),
                        'alt' => $photo->description,
                        'title' => $photo->description,
                        'category' => $photo->album->category->slug,
                        'album_id' => (int) $photo->album_id,
                    ];
                });
        }

        return Inertia::render('Gallery', [
            'categories' => $categories,
            'albums' => $albums,
            'photos' => $photos,
            'initialCategory' => $category,
            'selectedAlbum' => $selectedAlbum,
            'view' => $albumSlug ? 'photos' : 'albums',
        ]);
    }

    public function album(Album $album): Response
    {
        $album->load('publishedPhotos');

        $categories = GalleryCategory::query()
            ->get()
            ->map(function ($cat) {
                return [
                    'id' => $cat->id,
                    'name' => $cat->name,
                    'slug' => $cat->slug,
                ];
            });

        $photos = $album->publishedPhotos->map(function ($photo) {
            return [
                'id' => $photo->id,
                'src' => $photo->src,
                'alt' => $photo->alt,
                'title' => $photo->title,
                'category' => $photo->category,
                'album_id' => $photo->album_id,
            ];
        });

        return Inertia::render('Gallery', [
            'albums' => [],
            'categories' => $categories,
            'photos' => $photos,
            'selectedAlbum' => $album->slug,
            'view' => 'photos',
        ]);
    }
}
