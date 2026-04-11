<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->translateLabel(),
                TextInput::make('Email address')
                    ->translateLabel()
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at')
                    ->translateLabel(),
                TextInput::make('password')
                    ->translateLabel()
                    ->password()
                    ->required(),
            ]);
    }
}
