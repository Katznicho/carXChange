<?php

use App\Livewire\Site\TopNav;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(TopNav::class)
        ->assertStatus(200);
});
