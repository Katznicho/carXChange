<?php

use App\Livewire\Site\WebAboutUs;
use App\Livewire\Site\WebBlogPostDetails;
use App\Livewire\Site\WebBlogPosts;
use App\Livewire\Site\WebCarDetails;
use App\Livewire\Site\WebCarListings;
use App\Livewire\Site\WebContactUs;
use App\Livewire\Site\WebHomePage;
use App\Livewire\Site\WebPrivacyPolicy;
use App\Livewire\Site\WebTermsOfService;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

Route::get('/', WebHomePage::class)->name('site.index');
Route::get('/about-us', WebAboutUs::class)->name('site.about-us');
Route::get('/contact-us', WebContactUs::class)->name('site.contact-us');
Route::get('/privacy-policy', WebPrivacyPolicy::class)->name('site.privacy-policy');
Route::get('/terms-of-service', WebTermsOfService::class)->name('site.terms-of-service');
Route::get('/car-listings', WebCarListings::class)->name('site.car-listings');
Route::get('/cars/{slug}', WebCarDetails::class)->name('site.car.details');

Route::get('/blogs', WebBlogPosts::class)->name('site.blogs');
Route::get('/blogs/{slug}', WebBlogPostDetails::class)->name('site.blog.details');

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
