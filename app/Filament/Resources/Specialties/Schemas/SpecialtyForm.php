<?php

namespace App\Filament\Resources\Specialties\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SpecialtyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->translateLabel()
                    ->required(),
                TextInput::make('name_ar')
                    ->label('Name (AR)')
                    ->translateLabel()
                    ->required(),
                TextInput::make('name_en')
                    ->label('Name (EN)')
                    ->translateLabel(),
                TextInput::make('branch')
                    ->translateLabel()
                    ->required(),
                Select::make('level')
                    ->options(['TS' => 'T s', 'T' => 'T', 'CAP' => 'C a p', 'CMP' => 'C m p'])
                    ->translateLabel()
                    ->required(),
                TextInput::make('duration_months')
                    ->label('Duration')
                    ->translateLabel()
                    ->required()
                    ->numeric()
                    ->default(30),
                Toggle::make('is_active')
                    ->label('Active')
                    ->translateLabel()
                    ->required(),
            ]);
    }
}
