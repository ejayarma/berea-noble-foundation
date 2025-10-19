<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use SoftDeletes;


    protected $fillable = ["title", "slug", "content", "blog_post_category_id", "image", "author_id"];
    protected $appends = ["reading_time"];

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogPostCategory::class, 'blog_post_category_id', 'id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function getReadingTimeAttribute(): string
    {
        return $this->readingTime($this->content);
    }



    private function readingTime(string $html, int $wpm = 200): string
    {
        // Optional: remove code blocks before counting
        $cleaned = preg_replace('/<pre.*?>.*?<\/pre>/si', '', $html);

        // Convert HTML to plain text
        $text = strip_tags($cleaned);

        // Count words
        $wordCount = str_word_count($text);

        // Calculate minutes
        $minutes = (int) ceil($wordCount / $wpm);

        // Always show at least 1 minute
        $minutes = max(1, $minutes);

        // Format nicely
        return $minutes . ' ' . Str::plural('min', $minutes) . ' read';
    }
}
