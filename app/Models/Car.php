<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    protected $fillable = [
        'category_id', 'dealer_id', 'name', 'slug', 'brand',
        'model', 'year', 'price', 'mileage', 'transmission',
        'fuel_type', 'condition', 'description', 'features',
        'images', 'is_featured', 'is_sold', 'is_active'
    ];

    protected $casts = [
        'features' => 'array',
        'images' => 'array',
        'is_featured' => 'boolean',
        'is_sold' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function dealer(): BelongsTo
    {
        return $this->belongsTo(Dealer::class);
    }
}
