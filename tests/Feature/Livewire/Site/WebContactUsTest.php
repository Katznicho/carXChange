<?php

use App\Livewire\Site\WebContactUs;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WebContactUs::class)
        ->assertStatus(200);
});
