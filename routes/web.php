<?php

use App\Livewire\Site\WebCarDetails;
use App\Livewire\Site\WebHomePage;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', WebHomePage::class)->name('site.index');
Route::get('/details', WebCarDetails::class)->name('site.car.details');

Route::get('/cars/{car}', function (Car $car) {
    $car->load(['dealer', 'category', 'reviews' => function($query) {
        $query->where('is_approved', true);
    }]);
    
    return response()->json([
        'status' => 'success',
        'data' => array_merge($car->formatted_data, [
            'dealer' => $car->dealer,
            'category' => $car->category,
            'rating' => [
                'average' => $car->averageRating(),
                'count' => $car->reviewsCount()
            ]
        ])
    ]);
})->name('cars.show');
