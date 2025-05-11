<?php

namespace App\Livewire\Site;

use App\Models\Blog;
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

    public $filtered_search = '';

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
        $carsQuery = Car::where('is_active', 1)
            ->where('is_featured', 1)
            ->when(! $this->filtered_search && $this->selectedCategory, function ($query) {
                $query->where('category_id', $this->selectedCategory);
            })
            ->when($this->filtered_search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%'.$this->filtered_search.'%')
                        ->orWhere('brand', 'like', '%'.$this->filtered_search.'%')
                        ->orWhere('model', 'like', '%'.$this->filtered_search.'%')
                        ->orWhere('description', 'like', '%'.$this->filtered_search.'%');
                });
            })
            ->orderBy('created_at', 'desc');

        if ($this->filtered_search) {
            $cars = $carsQuery->get();
        } else {
            $cars = $carsQuery->paginate(8);
        }

        $blogs = Blog::where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        return view('livewire.site.web-home-page', compact('cars', 'blogs'));
    }
}
