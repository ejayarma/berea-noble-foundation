<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use App\Models\Admin\BlogPost;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\URL;

// use Filament\Forms\Components\RichEditor\TextColor;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->columnSpan(3)
                    ->unique('blog_posts', 'title'),


                FileUpload::make('image')
                    ->columnSpan(1)
                    ->label('Cover Image')
                    ->image()
                    ->visibility('public')
                    ->disk('public')
                    ->directory('blog-post-cover')
                    ->moveFiles()
                    ->maxSize(2048)
                    ->imageEditor(),

                Select::make('blog_post_category_id')
                    ->label('Category')
                    ->relationship(name: 'category', titleAttribute: 'name')
                    ->columnSpan(1)
                    ->searchable()
                    ->preload(),

                Select::make('author_id')
                    ->columnSpan(1)
                    ->label('Author')
                    ->relationship(name: 'author', titleAttribute: 'name')
                    ->searchable()
                    ->preload(),

                RichEditor::make('content')
                    ->columnSpan(3)
                    ->columnSpanFull()

            ]);
    }
}
