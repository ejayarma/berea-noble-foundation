<?php

namespace App\Filament\Resources\BlogPostCategories\Pages;

use App\Filament\Resources\BlogPostCategories\BlogPostCategoryResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateBlogPostCategory extends CreateRecord
{
    protected static string $resource = BlogPostCategoryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['name']);
        return $data;
    }
}
