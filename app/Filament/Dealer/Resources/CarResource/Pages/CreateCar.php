<?php

namespace App\Filament\Dealer\Resources\CarResource\Pages;

use App\Filament\Dealer\Resources\CarResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCar extends CreateRecord
{
    protected static string $resource = CarResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['dealer_id'] = auth('dealer')->id();
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Car Created')
            ->body('Your car listing has been created successfully.');
    }
}
