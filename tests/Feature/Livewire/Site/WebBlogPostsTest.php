<?php

use App\Livewire\Site\WebBlogPosts;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WebBlogPosts::class)
        ->assertStatus(200);
});
