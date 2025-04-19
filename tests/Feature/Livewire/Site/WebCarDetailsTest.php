<?php

use App\Livewire\Site\WebCarDetails;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WebCarDetails::class)
        ->assertStatus(200);
});
