<?php

use App\Livewire\Site\WebHomePage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WebHomePage::class)
        ->assertStatus(200);
});
