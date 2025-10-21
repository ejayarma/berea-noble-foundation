<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use App\Models\Admin\BlogPost;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\URL;

use Filament\Forms\Components\RichEditor\TextColor;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->columnSpan(3)
                    ->unique('blog_posts', 'title'),


                FileUpload::make('image')
                    ->required()
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
                    ->required()
                    ->label('Category')
                    ->relationship(name: 'category', titleAttribute: 'name')
                    // ->createOptionForm([
                    //     TextInput::make('name')
                    //         ->required(),
                    // ])
                    ->columnSpan(1)
                    ->searchable()
                    ->preload(),

                Select::make('author_id')
                    ->required()
                    ->columnSpan(1)
                    ->label('Author')
                    ->relationship(name: 'author', titleAttribute: 'name')
                    ->searchable()
                    ->preload(),

                RichEditor::make('content')
                    ->textColors([
                        'brand' => TextColor::make('Brand', '#f56600', darkColor: '#f56600'),
                        ...TextColor::getDefaults(),

                    ])
                    ->required()
                    ->columnSpan(3)
                    ->columnSpanFull()

            ]);
    }
}
