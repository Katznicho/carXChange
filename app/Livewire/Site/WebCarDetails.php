<?php

namespace App\Livewire\Site;

use App\Models\Car;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

class WebCarDetails extends Component
{
    #[Locked]
    public $car;

    public function mount($slug)
    {
        $c = Car::where('slug', $slug)->with(['dealer', 'reviews'])->first();

        if (! $c) {
            return redirect()->route('site.index')->with('error-message', 'Car not found');
        }

        $this->car = $c;
    }

    #[Title('Car Details')]
    public function render()
    {
        return view('livewire.site.web-car-details');
    }
}
