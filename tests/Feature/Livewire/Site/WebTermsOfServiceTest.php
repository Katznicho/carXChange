<?php

use App\Livewire\Site\WebTermsOfService;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WebTermsOfService::class)
        ->assertStatus(200);
});
