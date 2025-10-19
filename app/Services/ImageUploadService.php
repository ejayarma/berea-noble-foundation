<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageUploadService
{
    public function uploadPhoto(UploadedFile $file, string $directory = 'gallery/photos'): array
    {
        // Generate unique filename
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        
        // Full size image
        $fullPath = $directory . '/' . $filename;
        $image = Image::make($file);
        
        // Optimize full size (max 1920px width)
        if ($image->width() > 1920) {
            $image->resize(1920, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        
        Storage::disk('public')->put($fullPath, $image->encode());
        
        // Create thumbnail
        $thumbnailPath = 'gallery/thumbnails/' . $filename;
        $thumbnail = Image::make($file)
            ->fit(400, 300)
            ->encode();
            
        Storage::disk('public')->put($thumbnailPath, $thumbnail);
        
        // Get dimensions
        $dimensions = getimagesize($file->getRealPath());
        
        return [
            'file_path' => $fullPath,
            'thumbnail_path' => $thumbnailPath,
            'file_size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
            'width' => $dimensions[0] ?? null,
            'height' => $dimensions[1] ?? null,
        ];
    }
}