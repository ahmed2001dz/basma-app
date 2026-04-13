<?php

namespace App\Filament\Resources\Specialties\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SpecialtiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('name_ar')
                    ->label('Name (AR)')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('name_en')
                    ->label('Name (EN)')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('branch')
                    ->translateLabel()
                    ->searchable(),
                TextColumn::make('level')
                    ->translateLabel()

                    ->badge(),
                TextColumn::make('duration_months')
                    ->label('Duration')
                    ->translateLabel()
                    ->numeric()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Active')
                    ->translateLabel()
                    ->boolean(),
                TextColumn::make('created_at')
                    ->translateLabel()
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->translateLabel()
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('Level')
                    ->options([
                        'TS' => 'TS',
                        'T' => 'T',
                        'Cap' => 'CAP',
                    ]),
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
