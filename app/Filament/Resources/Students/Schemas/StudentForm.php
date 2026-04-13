<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Models\Specialty;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('first_name')
                    ->required(),
                DatePicker::make('birth_date')
                    ->required(),
                TextInput::make('birth_place')
                    ->required(),
                Select::make('gender')
                    ->options(['male' => 'Male', 'female' => 'Female'])
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('nin')
                    ->required(),
                TextInput::make('registration_number')
                    ->required(),
                Select::make('specialty_id')
                    ->options(Specialty::pluck('name_en', 'id'))
                    ->label('Specialty')
                    ->required(),
                Select::make('level')
                    ->options([
                        'level_1' => 'Level 1',
                        'level_2' => 'Level 2',
                        'level_3' => 'Level 3',
                    ])
                    ->label('Level')
                    ->required(),
                TextInput::make('wilaya_id')
                    ->required()
                    ->numeric(),
                TextInput::make('commune_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
