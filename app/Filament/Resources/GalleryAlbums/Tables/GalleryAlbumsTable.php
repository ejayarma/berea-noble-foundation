<?php

namespace App\Filament\Resources\GalleryAlbums\Tables;

use App\Models\Admin\Album;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;

class GalleryAlbumsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->description(fn(Album $record): string => $record->description)
                    ->searchable(),

                ImageColumn::make('cover_image')
                    ->searchable(),

                TextColumn::make('photos_count')
                    ->label("Photos")
                    ->counts('photos'),

                ToggleColumn::make('is_published'),
            ])
            // ->modifyQueryUsing(fn($query) => $query->withCount('photos'))
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
