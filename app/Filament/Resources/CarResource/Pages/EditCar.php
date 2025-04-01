<?php

namespace App\Filament\Resources\CarResource\Pages;

use App\Filament\Resources\CarResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditCar extends EditRecord
{
    protected static string $resource = CarResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Car Updated')
            ->body('The car has been updated successfully.');
    }
}
