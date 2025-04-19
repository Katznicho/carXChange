<?php

use App\Livewire\Site\WebCarListings;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WebCarListings::class)
        ->assertStatus(200);
});
