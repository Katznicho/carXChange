<?php

namespace App\Filament\Widgets;

use App\Models\Car;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestCars extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Car::query()
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
                Tables\Columns\TextColumn::make('dealer.name')
                    ->searchable(),
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
                    ->url(fn (Car $record): string => route('filament.admin.resources.cars.edit', $record))
                    ->icon('heroicon-m-eye'),
            ]);
    }
}