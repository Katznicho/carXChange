<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;
    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationGroup = 'Catalog';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Section::make('Basic Information')
                            ->schema([
                                Forms\Components\Select::make('category_id')
                                    ->relationship('category', 'name')
                                    ->required()
                                    ->preload()
                                    ->searchable(),
                                    
                                Forms\Components\Select::make('dealer_id')
                                    ->relationship('dealer', 'name')
                                    ->required()
                                    ->preload()
                                    ->searchable(),

                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                        if ($operation === 'create') {
                                            $set('slug', Str::slug($state));
                                        }
                                    }),

                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->disabled()
                                    ->dehydrated(),
                                    
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

                        Forms\Components\Section::make('Vehicle Specifications')
                            ->description('Enter the technical specifications')
                            ->icon('heroicon-o-cog')
                            ->schema([
                                Forms\Components\Select::make('body_type')
                                    ->options([
                                        'sedan' => 'Sedan',
                                        'suv' => 'SUV',
                                        'hatchback' => 'Hatchback',
                                        'coupe' => 'Coupe',
                                        'wagon' => 'Wagon',
                                        'van' => 'Van',
                                        'truck' => 'Truck',
                                    ])
                                    ->required(),
                                Forms\Components\TextInput::make('engine_size')
                                    ->numeric()
                                    ->step(0.1)
                                    ->suffix('L'),
                                Forms\Components\TextInput::make('doors')
                                    ->numeric()
                                    ->integer()
                                    ->minValue(2)
                                    ->maxValue(5),
                                Forms\Components\TextInput::make('cylinders')
                                    ->numeric()
                                    ->integer(),
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
                                Forms\Components\Select::make('drive_type')
                                    ->options([
                                        'fwd' => 'Front-Wheel Drive',
                                        'rwd' => 'Rear-Wheel Drive',
                                        'awd' => 'All-Wheel Drive (AWD/4WD)',
                                        '4x4' => '4x4',
                                    ]),
                            ])->columns(3),
                    ])->columnSpan(['lg' => 2]),

                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Section::make('Media Gallery')
                            ->description('Upload images and video')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                Forms\Components\FileUpload::make('images')
                                    ->multiple()
                                    ->image()
                                    ->directory('cars')
                                    ->maxFiles(5)
                                    ->reorderable()
                                    ->hint('First image will be the main image')
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('video_url')
                                    ->url()
                                    ->prefix('https://')
                                    ->columnSpanFull(),
                            ]),

                        Forms\Components\Section::make('Pricing & Status')
                            ->description('Set pricing and availability')
                            ->icon('heroicon-o-currency-dollar')
                            ->schema([
                                Forms\Components\TextInput::make('price')
                                    ->required()
                                    ->numeric()
                                    ->prefix('UGX')
                                    ->step(1000),
                                Forms\Components\TextInput::make('mileage')
                                    ->required()
                                    ->numeric()
                                    ->suffix('km'),
                                Forms\Components\Select::make('condition')
                                    ->options([
                                        'new' => 'New',
                                        'used' => 'Used',
                                        'certified' => 'Certified Pre-Owned',
                                    ])
                                    ->required(),
                                Forms\Components\TagsInput::make('color')
                                    ->placeholder('Add a color'),
                                Forms\Components\TextInput::make('vin')
                                    ->label('VIN Number')
                                    ->unique(ignoreRecord: true),
                                Forms\Components\Toggle::make('is_featured')
                                    ->default(false)
                                    ->inline(false),
                                Forms\Components\Toggle::make('is_sold')
                                    ->default(false)
                                    ->inline(false),
                                Forms\Components\Toggle::make('is_active')
                                    ->default(true)
                                    ->inline(false),
                            ])->columns(2),
                    ])->columnSpan(['lg' => 1]),

                Forms\Components\Section::make('Additional Information')
                    ->description('Enter detailed specifications and features')
                    ->icon('heroicon-o-clipboard-document-list')
                    ->schema([
                        Forms\Components\Tabs::make('Additional Details')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('Dimensions')
                                    ->schema([
                                        Forms\Components\Grid::make(3)
                                            ->schema([
                                                Forms\Components\TextInput::make('length')->numeric()->suffix('mm'),
                                                Forms\Components\TextInput::make('width')->numeric()->suffix('mm'),
                                                Forms\Components\TextInput::make('height')->numeric()->suffix('mm'),
                                                Forms\Components\TextInput::make('wheelbase')->numeric()->suffix('mm'),
                                                Forms\Components\TextInput::make('height_with_rails')->numeric()->suffix('mm'),
                                                Forms\Components\TextInput::make('width_with_mirrors')->numeric()->suffix('mm'),
                                            ]),
                                    ]),
                                Forms\Components\Tabs\Tab::make('Capacity')
                                    ->schema([
                                        Forms\Components\Grid::make(3)
                                            ->schema([
                                                Forms\Components\TextInput::make('seats')->numeric()->integer(),
                                                Forms\Components\TextInput::make('fuel_tank_capacity')->numeric()->suffix('L'),
                                                Forms\Components\TextInput::make('luggage_capacity_seats_up')->numeric()->suffix('L'),
                                                Forms\Components\TextInput::make('luggage_capacity_seats_down')->numeric()->suffix('L'),
                                            ]),
                                    ]),
                                Forms\Components\Tabs\Tab::make('Weight')
                                    ->schema([
                                        Forms\Components\Grid::make(3)
                                            ->schema([
                                                Forms\Components\TextInput::make('gross_weight')->numeric()->suffix('kg'),
                                                Forms\Components\TextInput::make('max_loading_weight')->numeric()->suffix('kg'),
                                                Forms\Components\TextInput::make('max_roof_load')->numeric()->suffix('kg'),
                                                Forms\Components\TextInput::make('min_kerb_weight')->numeric()->suffix('kg'),
                                                Forms\Components\TextInput::make('max_towing_weight_braked')->numeric()->suffix('kg'),
                                                Forms\Components\TextInput::make('max_towing_weight_unbraked')->numeric()->suffix('kg'),
                                            ]),
                                    ]),
                            ])->columnSpanFull(),
                        Forms\Components\RichEditor::make('description')
                            ->columnSpanFull(),
                        Forms\Components\TagsInput::make('features')
                            ->columnSpanFull(),
                    ])->columnSpan('full'),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
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
                    ->money('UGX')
                    ->sortable(),
                Tables\Columns\TextColumn::make('year')
                    ->sortable(),
                Tables\Columns\TextColumn::make('mileage')
                    ->suffix('km')
                    ->sortable(),
                Tables\Columns\TextColumn::make('body_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('engine_size')
                    ->suffix('L')
                    ->sortable(),
                Tables\Columns\TextColumn::make('vin')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('drive_type')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name'),
                Tables\Filters\SelectFilter::make('dealer')
                    ->relationship('dealer', 'name'),
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
}
