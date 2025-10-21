<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\BlogPost;
use App\Models\Admin\BlogPostCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class BlogPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $posts = BlogPost::query()->with(['author', 'category'])
            ->get()
            ->map(function ($post) {
                return [
                    'id' => $post->id,
                    'category' => $post->category->name,
                    'slug' => $post->slug,
                    'title' => $post->title,
                    'image' => Storage::url($post->image),
                    'description' => $post->description ?? '',
                    'date' => $post->created_at->toDateString(),
                ];
            });

        $categories = BlogPostCategory::query()->get(['id', 'name', 'slug']);
        
        return Inertia::render('Blog', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    /**
     * Handle the incoming request.
     */
    public function read(string $slug)
    {
        $post = BlogPost::query()
            ->with('category', 'author')
            ->firstWhere('slug', $slug);


        return Inertia::render('BlogPost', [
            'post'   => [
                'id' => $post->id,
                'title' => $post->title,
                'category' => $post->category->name,
                'excerpt' => $post->excerpt,
                'slug' => $post->slug,
                'content' => $post->content,
                'image' => Storage::url($post->image),
                'author' => [
                    'name' => $post->author->name,
                    'avatar' => Storage::url($post->author->avatar),
                ],
                'reading_time' => $post->reading_time,
                'published_at' => $post->updated_at,
            ],
        ]);
    }
}
