<?php

use App\Livewire\Site\WebCarDetails;
use App\Livewire\Site\WebHomePage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', WebHomePage::class)->name('site.index');
Route::get('/details', WebCarDetails::class)->name('site.car.details');
