<?php

namespace App\Filament\Dealer\Resources;

use App\Filament\Dealer\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;
    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name')
                            ->required()
                            ->searchable(),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('brand')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('model')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('year')
                            ->required()
                            ->numeric()
                            ->minValue(1900)
                            ->maxValue(date('Y') + 1),
                    ])->columns(2),

                Forms\Components\Section::make('Pricing & Details')
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('$'),
                        Forms\Components\TextInput::make('mileage')
                            ->required()
                            ->numeric()
                            ->suffix('km'),
                        Forms\Components\Select::make('transmission')
                            ->options([
                                'automatic' => 'Automatic',
                                'manual' => 'Manual',
                            ])
                            ->required(),
                        Forms\Components\Select::make('fuel_type')
                            ->options([
                                'petrol' => 'Petrol',
                                'diesel' => 'Diesel',
                                'electric' => 'Electric',
                                'hybrid' => 'Hybrid',
                            ])
                            ->required(),
                        Forms\Components\Select::make('condition')
                            ->options([
                                'new' => 'New',
                                'used' => 'Used',
                                'certified' => 'Certified Pre-Owned',
                            ])
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Images & Description')
                    ->schema([
                        Forms\Components\FileUpload::make('images')
                            ->multiple()
                            ->image()
                            ->directory('cars')
                            ->maxFiles(5)
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('description')
                            ->columnSpanFull(),
                        Forms\Components\TagsInput::make('features')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_featured')
                            ->default(false),
                        Forms\Components\Toggle::make('is_sold')
                            ->default(false),
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->where('dealer_id', auth('dealer')->id()))
            ->columns([
                Tables\Columns\ImageColumn::make('images')
                    ->circular()
                    ->stacked()
                    ->limit(3),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('year')
                    ->sortable(),
                Tables\Columns\TextColumn::make('mileage')
                    ->suffix('km')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_sold')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name'),
                Tables\Filters\TernaryFilter::make('is_featured'),
                Tables\Filters\TernaryFilter::make('is_sold'),
                Tables\Filters\TernaryFilter::make('is_active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('dealer_id', auth('dealer')->id())->count();
    }
}
