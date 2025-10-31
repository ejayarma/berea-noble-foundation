<?php

namespace App\Filament\Resources\GalleryCategories\Pages;

use App\Filament\Resources\GalleryCategories\GalleryCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditGalleryCategory extends EditRecord
{
    protected static string $resource = GalleryCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['slug'] = Str::slug($data['name']);
        return $data;
    }
}
