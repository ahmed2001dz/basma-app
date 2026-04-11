<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\ActionGroup as ActionsActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;

use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->translateLabel(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable()
                    ->sortable()
                    ->translateLabel(),
                TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->translateLabel(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()

                    ->translateLabel(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->translateLabel(),
            ])
            ->filters([
                //
            ])

            ->actions([
                ActionsActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ])
                // يمكنك إضافة أيقونة مخصصة للقائمة إذا أردت
                    ->icon('heroicon-m-ellipsis-vertical')
                    ->tooltip('fesfsfsef'),
            ])
            // ->recordActions([
            //     EditAction::make(),
            //     DeleteAction::make(),
            //     ViewAction::make(),
            // ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),

                ]),
            ]);
    }
}
