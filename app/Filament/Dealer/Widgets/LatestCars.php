<?php

namespace App\Filament\Dealer\Widgets;

use App\Models\Car;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestCars extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';
    protected static ?string $heading = 'Recent Listings';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Car::query()
                    ->where('dealer_id', auth('dealer')->id())
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                Tables\Columns\ImageColumn::make('images')
                    ->circular()
                    ->stacked()
                    ->limit(1),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->description(fn (Car $record): string => $record->brand),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_sold')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->url(fn (Car $record): string => route('filament.dealer.resources.cars.edit', $record))
                    ->icon('heroicon-m-eye'),
            ]);
    }
}