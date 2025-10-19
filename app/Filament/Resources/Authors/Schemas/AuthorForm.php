<?php

namespace App\Filament\Resources\Authors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;


class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique('authors', 'name')
                    ->string(),

                FileUpload::make('avatar')
                    ->label('Author Image')
                    ->image()
                    ->avatar()
                    ->imageEditor()
                    ->circleCropper()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('author-avatar')
                    ->moveFiles()
                    ->maxSize(2048)
                    ->imageEditor(),
            ]);
    }
}
