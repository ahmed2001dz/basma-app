<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('last_name')
                    ->label('Last name')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('first_name')
                    ->label('First name')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('birth_date')
                        ->label('Birth date')
                        ->translateLabel()
                    ->date()
                    ->sortable(),
                TextColumn::make('birth_place')
                    ->label('Birth place')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('gender')
                    ->label('Gender')
                    ->translateLabel()
                    ->badge(),
                TextColumn::make('address')
                    ->label('Address')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('phone_number')
                    ->label('Phone')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('nin')
                    ->label('NIN')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('registration_number')
                    ->label('Registration number')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('specialty.name_en')
                    ->label('Specialty')
                    ->translateLabel()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('level')
                    ->label('Level')
                    ->translateLabel()
                    ->badge()
                    ->searchable(),
                TextColumn::make('wilaya_id')
                        ->label('Wilaya')
                        ->translateLabel()

                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('commune_id')
                    ->label('Commune')
                    ->translateLabel()
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created at')
                    ->translateLabel()

                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Updated at')
                    ->translateLabel()
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
