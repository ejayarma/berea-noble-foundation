<?php

namespace App\Filament\Resources\Authors\Pages;

use App\Filament\Resources\Authors\AuthorResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateAuthor extends CreateRecord
{
    protected static string $resource = AuthorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['name']);
        return $data;
    }
}
