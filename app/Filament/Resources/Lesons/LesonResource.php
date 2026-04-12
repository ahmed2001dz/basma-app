<?php

namespace App\Filament\Resources\Lesons;

use App\Filament\Resources\Lesons\Pages\CreateLeson;
use App\Filament\Resources\Lesons\Pages\EditLeson;
use App\Filament\Resources\Lesons\Pages\ListLesons;
use App\Filament\Resources\Lesons\Schemas\LesonForm;
use App\Filament\Resources\Lesons\Tables\LesonsTable;
use App\Models\Leson;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LesonResource extends Resource
{
    protected static ?string $model = Leson::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return LesonForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LesonsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLesons::route('/'),
            'create' => CreateLeson::route('/create'),
            'edit' => EditLeson::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Leson');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Lesons');
    }
}
