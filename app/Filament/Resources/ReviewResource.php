<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static ?string $navigationGroup = 'Catalog';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Review Details')
                    ->schema([
                        Forms\Components\Select::make('car_id')
                            ->relationship('car', 'name')
                            ->required()
                            ->searchable(),

                        Forms\Components\TextInput::make('reviewer_name')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('reviewer_email')
                            ->email()
                            ->maxLength(255),

                        Forms\Components\RichEditor::make('comment')
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('rating')
                            ->numeric()
                            ->required()
                            ->minValue(1)
                            ->maxValue(5)
                            ->step(0.1)
                            ->suffix('stars'),

                        Forms\Components\Toggle::make('is_approved')
                            ->default(false)
                            ->helperText('Approve this review to make it visible on the website'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('car.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('reviewer_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reviewer_email')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('rating')
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => "★ {$state}"),
                Tables\Columns\IconColumn::make('is_approved')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('car')
                    ->relationship('car', 'name'),
                Tables\Filters\TernaryFilter::make('is_approved')
                    ->label('Approval Status')
                    ->boolean(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
