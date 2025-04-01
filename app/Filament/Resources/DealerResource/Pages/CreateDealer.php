<?php

namespace App\Filament\Resources\DealerResource\Pages;

use App\Filament\Resources\DealerResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateDealer extends CreateRecord
{
    protected static string $resource = DealerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Dealer Created')
            ->body('The dealer account has been created successfully.');
    }
}
