<?php

namespace App\Livewire\Site;

use App\Models\Car;
use App\Models\Category;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

class WebHomePage extends Component
{
    #[Locked]
    public $categories = [];

    #[Locked]
    public $selectedCategory = null;

    public function mount()
    {
        $this->categories = Category::select(['id', 'name', 'image'])
            ->where('is_active', 1)
            ->orderBy('name')
            ->get();
    }

    public function setCategory($value)
    {
        $this->selectedCategory = $value;
    }

    #[Title('Welcome to CarxChange')]
    public function render()
    {
        $cars = Car::where('is_active', 1)
            ->where('is_featured', 1)
            ->when($this->selectedCategory, function ($query) {
                $query->where('category_id', $this->selectedCategory);
            })
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();

        return view('livewire.site.web-home-page', compact('cars'));
    }
}
