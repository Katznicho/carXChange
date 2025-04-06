<?php

namespace App\Livewire\Site;

use Livewire\Attributes\Title;
use Livewire\Component;

class WebHomePage extends Component
{
    #[Title('Welcome to CarxChange')]
    public function render()
    {
        return view('livewire.site.web-home-page');
    }
}
