<?php

use App\Livewire\Site\WebBlogPostDetails;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WebBlogPostDetails::class)
        ->assertStatus(200);
});
