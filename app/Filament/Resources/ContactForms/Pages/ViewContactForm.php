<?php

namespace App\Filament\Resources\ContactForms\Pages;

use App\Filament\Resources\ContactForms\ContactFormResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContactForm extends ViewRecord
{
    protected static string $resource = ContactFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
