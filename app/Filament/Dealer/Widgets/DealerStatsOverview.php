<?php

namespace App\Filament\Dealer\Widgets;

use App\Models\Car;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DealerStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        $dealerId = auth('dealer')->id();

        return [
            Stat::make('Total Cars', Car::where('dealer_id', $dealerId)->count())
                ->description('Your total listings')
                ->descriptionIcon('heroicon-m-truck')
                ->color('success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),

            Stat::make('Active Listings', Car::where('dealer_id', $dealerId)
                ->where('is_active', true)
                ->where('is_sold', false)
                ->count())
                ->description('Currently available')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('info')
                ->chart([3, 5, 7, 6, 3, 5, 3, 4]),

            Stat::make('Featured Cars', Car::where('dealer_id', $dealerId)
                ->where('is_featured', true)
                ->count())
                ->description('Premium listings')
                ->descriptionIcon('heroicon-m-star')
                ->color('warning')
                ->chart([4, 5, 3, 7, 4, 5, 3, 6]),

            Stat::make('Sold Cars', Car::where('dealer_id', $dealerId)
                ->where('is_sold', true)
                ->count())
                ->description('Successfully sold')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success')
                ->chart([5, 3, 7, 5, 4, 3, 5, 4]),
        ];
    }
}
