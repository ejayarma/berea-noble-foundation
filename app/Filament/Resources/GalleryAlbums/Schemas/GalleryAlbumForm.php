<?php

namespace App\Filament\Resources\GalleryAlbums\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryAlbumForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->unique('albums', 'title'),

                FileUpload::make('cover_image')
                    ->required()
                    ->image()
                    ->visibility('public')
                    ->disk('public')
                    ->directory('gallery-cover')
                    ->moveFiles()
                    ->maxSize(2048)
                    ->imageEditor(),

                Textarea::make('description')
                    ->required()
                    ->required(),

                Toggle::make('is_published')
                    ->default(true),

                Select::make('gallery_category_id')
                    ->label('Category')
                    ->relationship(name: 'category', titleAttribute: 'name')
                    // ->createOptionForm([
                    //     TextInput::make('name')
                    //         ->required(),
                    // ])
                    ->searchable()
                    ->preload(),

                Repeater::make('photos')
                    ->relationship()
                    ->cloneable()
                    ->schema([

                        TextInput::make('description')
                            ->nullable(),

                        FileUpload::make('image')
                            ->required()
                            ->distinct()
                            ->image()
                            ->visibility('public')
                            ->disk('public')
                            ->directory('gallery-image')
                            ->moveFiles()
                            ->maxSize(2048)
                            ->imageEditor(),

                        Toggle::make('is_published')
                            ->default(true),
                    ])
                    ->columnSpanFull()
                    ->grid(2)
                    ->defaultItems(2)
                    ->reorderable()
                    ->itemNumbers()

            ]);
    }
}
