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
        'category',
        'photo_count',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'photo_count' => 'integer',
        'sort_order' => 'integer',
    ];

    protected $appends = [
        'cover_image_url',
    ];

    // Relationships
    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class)->orderBy('sort_order');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(GalleryCategory::class,'gallery_category_id', 'id');
    }

    public function publishedPhotos(): HasMany
    {
        return $this->hasMany(Photo::class)->where('is_published', true)->orderBy('sort_order');
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
        return $query->where('category', $category);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }

    // Methods
    public function updatePhotoCount(): void
    {
        $this->update([
            'photo_count' => $this->photos()->count()
        ]);
    }

    public function updateCoverImage(): void
    {
        $firstPhoto = $this->photos()->first();
        if ($firstPhoto && !$this->cover_image) {
            $this->update([
                'cover_image' => $firstPhoto->file_path
            ]);
        }
    }
}
