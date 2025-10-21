<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique('team_members', 'name')
                    ->string(),

                TextInput::make('position')
                    ->required()
                    ->string(),

                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('team-member')
                    ->moveFiles()
                    ->maxSize(2048)
                    ->imageEditor(),
            ]);
    }
}
