<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        'car_id',
        'reviewer_name',
        'reviewer_email',
        'comment',
        'rating',
        'is_approved'
    ];

    protected $casts = [
        'rating' => 'decimal:1',
        'is_approved' => 'boolean',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
