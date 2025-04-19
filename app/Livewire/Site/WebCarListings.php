<?php

namespace App\Livewire\Site;

use App\Models\Car;
use App\Models\Category;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

class WebCarListings extends Component
{
    #[Locked]
    public $categories = [];

    #[Locked]
    public $brands = [];

    public $filtered_category = '';

    public $filtered_brand = '';

    public $filtered_condition = '';

    public $filtered_min_year = '';

    public $filtered_max_year = '';

    public $filtered_min_price = '';

    public $filtered_max_price = '';

    public $filtered_mileage = '';

    public $filtered_transmission = '';

    public $filtered_fuel_type = '';

    public $filtered_search = '';

    public function mount()
    {
        $this->categories = Category::select(['id', 'name'])
            ->where('is_active', 1)
            ->orderBy('name')
            ->get();

        // Select distinct brands from cars
        $this->brands = Car::select('brand')
            ->where('is_active', 1)
            ->groupBy('brand')
            ->orderBy('brand')
            ->get()
            ->pluck('brand');
    }

    #[Title('Welcome to CarxChange')]
    public function render()
    {
        $cars = Car::where('is_active', 1)
            // ->where('is_featured', 1)
            ->when($this->filtered_category, function ($query) {
                $query->where('category_id', $this->filtered_category);
            })
            ->when($this->filtered_brand, function ($query) {
                $query->where('brand', $this->filtered_brand);
            })
            ->when($this->filtered_condition, function ($query) {
                $query->where('condition', $this->filtered_condition);
            })
            ->when($this->filtered_min_year, function ($query) {
                $query->where('year', '>=', $this->filtered_min_year);
            })
            ->when($this->filtered_max_year, function ($query) {
                $query->where('year', '<=', $this->filtered_max_year);
            })
            ->when($this->filtered_min_price, function ($query) {
                $query->where('price', '>=', $this->filtered_min_price);
            })
            ->when($this->filtered_max_price, function ($query) {
                $query->where('price', '<=', $this->filtered_max_price);
            })
            ->when($this->filtered_mileage, function ($query) {
                $query->where('mileage', '<=', $this->filtered_mileage);
            })
            ->when($this->filtered_transmission, function ($query) {
                $query->where('transmission', $this->filtered_transmission);
            })
            ->when($this->filtered_fuel_type, function ($query) {
                $query->where('fuel_type', $this->filtered_fuel_type);
            })
            ->when($this->filtered_search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%'.$this->filtered_search.'%')
                        ->orWhere('brand', 'like', '%'.$this->filtered_search.'%')
                        ->orWhere('model', 'like', '%'.$this->filtered_search.'%')
                        ->orWhere('description', 'like', '%'.$this->filtered_search.'%');
                });
            })

            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.site.web-car-listings', compact('cars'));
    }
}
