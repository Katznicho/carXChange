<?php

use App\Livewire\Site\WebCarDetails;
use App\Livewire\Site\WebCarListings;
use App\Livewire\Site\WebHomePage;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

Route::get('/', WebHomePage::class)->name('site.index');
Route::get('/car-listings', WebCarListings::class)->name('site.car-listings');
Route::get('/cars/{slug}', WebCarDetails::class)->name('site.car.details');

// Get all cars
Route::get('/cars', function () {
    $cars = Car::with(['category', 'dealer'])
        ->where('is_active', true)
        ->latest()
        ->get();

    return response()->json([
        'status' => 'success',
        'data' => $cars->map->formatted_data,
    ]);
})->name('cars.index');

// Get single car details
Route::get('/cars/{car}', function (Car $car) {
    $car->load(['dealer', 'category', 'reviews' => function ($query) {
        $query->where('is_approved', true);
    }]);

    return response()->json([
        'status' => 'success',
        'data' => array_merge($car->formatted_data, [
            'dealer' => $car->dealer,
            'category' => $car->category,
            'rating' => [
                'average' => $car->averageRating(),
                'count' => $car->reviewsCount(),
            ],
        ]),
    ]);
})->name('cars.show');
