<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'cover_image',
        'gallery_category_id',
        'is_published',
        'slug',
    ];


    protected $casts = [
        'is_published' => 'boolean',
    ];

    protected $appends = [
        'cover_image_url',
    ];

    // Relationships
    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(GalleryCategory::class, 'gallery_category_id', 'id');
    }

    public function publishedPhotos(): HasMany
    {
        return $this->hasMany(Photo::class)->where('is_published', true);
    }

    // Accessors
    public function getCoverImageUrlAttribute(): ?string
    {
        if (!$this->cover_image) {
            return null;
        }

        if (filter_var($this->cover_image, FILTER_VALIDATE_URL)) {
            return $this->cover_image;
        }

        return Storage::url($this->cover_image);
    }

    public function getAltAttribute(): string
    {
        return $this->alt_text ?? $this->description ?? $this->title;
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeByCategory($query, string $category)
    {
        if ($category === 'all') {
            return $query;
        }
        return $query->whereRelation('category', 'slug', $category);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    // Events
    protected static function booted(): void
    {
        static::deleted(function (Album $album) {
            Storage::disk('public')->delete($album->cover_image);
        });
    }
}
