<?php

namespace App\Filament\Resources\Lesons\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
class LesonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('type')
                    
                    ->required(),

                TextInput::make('category')
                    ->required(),

                TinyEditor::make('content')

                    ->columnSpanFull()
                    ->direction('rtl')
                    ->height(500)
                    ->showMenuBar()

            ]);
    }
}
