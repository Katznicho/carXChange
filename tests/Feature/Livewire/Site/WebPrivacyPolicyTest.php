<?php

use App\Livewire\Site\WebPrivacyPolicy;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WebPrivacyPolicy::class)
        ->assertStatus(200);
});
