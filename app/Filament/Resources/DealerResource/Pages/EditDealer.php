<?php

namespace App\Filament\Resources\DealerResource\Pages;

use App\Filament\Resources\DealerResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditDealer extends EditRecord
{
    protected static string $resource = DealerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Dealer Updated')
            ->body('The dealer account has been updated successfully.');
    }
}
