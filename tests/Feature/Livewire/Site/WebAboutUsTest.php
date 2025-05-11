<?php

use App\Livewire\Site\WebAboutUs;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WebAboutUs::class)
        ->assertStatus(200);
});
