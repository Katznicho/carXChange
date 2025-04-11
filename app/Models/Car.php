<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    protected $fillable = [
        'category_id', 'dealer_id', 'name', 'slug', 'brand',
        'model', 'year', 'price', 'mileage', 'transmission',
        'fuel_type', 'condition', 'description', 'features',
        'images', 'is_featured', 'is_sold', 'is_active',
        'body_type', 'engine_size', 'doors', 'cylinders',
        'color', 'vin', 'drive_type', 'video_url',
        'length', 'width', 'height', 'wheelbase',
        'height_with_rails', 'luggage_capacity_seats_up',
        'luggage_capacity_seats_down', 'gross_weight',
        'max_loading_weight', 'max_roof_load', 'seats',
        'fuel_tank_capacity', 'min_kerb_weight',
        'max_towing_weight_braked', 'max_towing_weight_unbraked',
        'turning_circle', 'width_with_mirrors', 'leading_image'
    ];

    protected $casts = [
        'features' => 'array',
        'images' => 'array',
        'is_featured' => 'boolean',
        'is_sold' => 'boolean',
        'is_active' => 'boolean',
        'color' => 'array',
        'mileage' => 'decimal:2',
        'engine_size' => 'decimal:1',
        'price' => 'decimal:2',
        'length' => 'integer',
        'width' => 'integer',
        'height' => 'integer',
        'wheelbase' => 'integer',
        'height_with_rails' => 'integer',
        'luggage_capacity_seats_up' => 'integer',
        'luggage_capacity_seats_down' => 'integer',
        'gross_weight' => 'integer',
        'max_loading_weight' => 'integer',
        'max_roof_load' => 'integer',
        'seats' => 'integer',
        'fuel_tank_capacity' => 'integer',
        'min_kerb_weight' => 'integer',
        'max_towing_weight_braked' => 'integer',
        'max_towing_weight_unbraked' => 'integer',
        'turning_circle' => 'integer',
        'width_with_mirrors' => 'integer',
        'cylinders' => 'integer',
        'doors' => 'integer'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function dealer(): BelongsTo
    {
        return $this->belongsTo(Dealer::class);
    }

    public function getLeadingImageAttribute(): ?string
    {
        return $this->images[0] ?? null;
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function averageRating()
    {
        return $this->reviews()
            ->where('is_approved', true)
            ->avg('rating') ?? 0;
    }

    public function reviewsCount()
    {
        return $this->reviews()
            ->where('is_approved', true)
            ->count();
    }
}
