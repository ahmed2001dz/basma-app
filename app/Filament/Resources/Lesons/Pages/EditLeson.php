<?php

namespace App\Filament\Resources\Lesons\Pages;

use App\Filament\Resources\Lesons\LesonResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLeson extends EditRecord
{
    protected static string $resource = LesonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
