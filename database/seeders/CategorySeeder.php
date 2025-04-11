<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Luxury Cars' => 'High-end luxury vehicles for the discerning buyer',
            'SUVs & Crossovers' => 'Versatile sport utility vehicles for family and adventure',
            'Sports Cars' => 'High-performance vehicles built for speed and handling',
            'Electric Vehicles' => 'Modern eco-friendly electric-powered vehicles',
            'Hybrid Cars' => 'Fuel-efficient hybrid technology vehicles',
            'Pickup Trucks' => 'Robust utility vehicles for work and leisure',
            'Commercial Vehicles' => 'Vans and trucks for business use',
            'Economy Cars' => 'Affordable and fuel-efficient compact vehicles',
        ];

        foreach ($categories as $name => $description) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $description,
                'is_active' => true,
            ]);
        }
    }
}
