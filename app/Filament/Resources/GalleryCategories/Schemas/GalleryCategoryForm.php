<?php

namespace App\Filament\Resources\GalleryCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique('blog_post_categories', 'name')
                    ->string(),
            ]);
    }
}
