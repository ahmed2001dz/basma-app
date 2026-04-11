<?php

namespace App\Filament\Resources\Lesons\Pages;

use App\Filament\Resources\Lesons\LesonResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLesons extends ListRecords
{
    protected static string $resource = LesonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
