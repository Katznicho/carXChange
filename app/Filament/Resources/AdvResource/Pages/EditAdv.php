<?php

namespace App\Filament\Resources\AdvResource\Pages;

use App\Filament\Resources\AdvResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdv extends EditRecord
{
    protected static string $resource = AdvResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
