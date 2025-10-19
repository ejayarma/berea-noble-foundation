<?php

namespace App\Filament\Resources\ContactForms\Pages;

use App\Filament\Resources\ContactForms\ContactFormResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContactForm extends CreateRecord
{
    protected static string $resource = ContactFormResource::class;
}
