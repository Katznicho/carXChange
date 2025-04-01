<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'description', 'is_active'];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
