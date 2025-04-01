<?php

namespace App\Filament\Resources\AdvResource\Pages;

use App\Filament\Resources\AdvResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdvs extends ListRecords
{
    protected static string $resource = AdvResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
