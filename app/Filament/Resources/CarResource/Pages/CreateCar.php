<?php

namespace App\Filament\Resources\CarResource\Pages;

use App\Filament\Resources\CarResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCar extends CreateRecord
{
    protected static string $resource = CarResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Car Created')
            ->body('The car has been created successfully.');
    }
}
