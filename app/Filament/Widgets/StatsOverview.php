<?php

namespace App\Filament\Widgets;

use App\Models\Car;
use App\Models\User;
use App\Models\Dealer;
use App\Models\Category;
use App\Models\Adv;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('Active platform users')
                ->descriptionIcon('heroicon-m-user')
                ->color('success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),

            Stat::make('Total Dealers', Dealer::count())
                ->description(Dealer::where('is_verified', true)->count() . ' verified dealers')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->color('warning')
                ->chart([3, 5, 7, 6, 3, 5, 3, 4])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),

            Stat::make('Total Cars', Car::count())
                ->description(Car::where('is_sold', false)->count() . ' available cars')
                ->descriptionIcon('heroicon-m-truck')
                ->color('info')
                ->chart([4, 5, 3, 7, 4, 5, 3, 6])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),

            Stat::make('Active Listings', Car::where('is_active', true)->count())
                ->description(Car::where('is_featured', true)->count() . ' featured listings')
                ->descriptionIcon('heroicon-m-star')
                ->color('success')
                ->chart([5, 3, 7, 5, 4, 3, 5, 4])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),
        ];
    }
}
