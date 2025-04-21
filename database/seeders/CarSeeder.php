<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Category;
use App\Models\Dealer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            [
                'name' => 'Toyota Land Cruiser',
                'brand' => 'Toyota',
                'model' => 'Land Cruiser',
                'body_type' => 'suv',
                'price' => 250000000,
            ],
            [
                'name' => 'Mercedes-Benz S-Class',
                'brand' => 'Mercedes-Benz',
                'model' => 'S-Class',
                'body_type' => 'sedan',
                'price' => 350000000,
            ],
            [
                'name' => 'BMW X5',
                'brand' => 'BMW',
                'model' => 'X5',
                'body_type' => 'suv',
                'price' => 280000000,
            ],
            [
                'name' => 'Range Rover Sport',
                'brand' => 'Land Rover',
                'model' => 'Range Rover Sport',
                'body_type' => 'suv',
                'price' => 320000000,
            ],
            [
                'name' => 'Toyota Harrier',
                'brand' => 'Toyota',
                'model' => 'Harrier',
                'body_type' => 'suv',
                'price' => 180000000,
            ],
            [
                'name' => 'Honda CR-V',
                'brand' => 'Honda',
                'model' => 'CR-V',
                'body_type' => 'suv',
                'price' => 150000000,
            ],
            [
                'name' => 'Audi Q7',
                'brand' => 'Audi',
                'model' => 'Q7',
                'body_type' => 'suv',
                'price' => 290000000,
            ],
            [
                'name' => 'Toyota Hilux',
                'brand' => 'Toyota',
                'model' => 'Hilux',
                'body_type' => 'truck',
                'price' => 160000000,
            ],
            [
                'name' => 'Volkswagen Golf',
                'brand' => 'Volkswagen',
                'model' => 'Golf',
                'body_type' => 'hatchback',
                'price' => 120000000,
            ],
            [
                'name' => 'BMW M3',
                'brand' => 'BMW',
                'model' => 'M3',
                'body_type' => 'sedan',
                'price' => 310000000,
            ],
            [
                'name' => 'Mercedes-Benz G-Class',
                'brand' => 'Mercedes-Benz',
                'model' => 'G-Class',
                'body_type' => 'suv',
                'price' => 450000000,
            ],
            [
                'name' => 'Porsche 911',
                'brand' => 'Porsche',
                'model' => '911',
                'body_type' => 'coupe',
                'price' => 480000000,
            ],
            [
                'name' => 'Toyota RAV4',
                'brand' => 'Toyota',
                'model' => 'RAV4',
                'body_type' => 'suv',
                'price' => 140000000,
            ],
            [
                'name' => 'Lexus RX',
                'brand' => 'Lexus',
                'model' => 'RX',
                'body_type' => 'suv',
                'price' => 270000000,
            ],
            [
                'name' => 'Ford Ranger',
                'brand' => 'Ford',
                'model' => 'Ranger',
                'body_type' => 'truck',
                'price' => 155000000,
            ],
        ];

        foreach ($cars as $car) {
            Car::create([
                'category_id' => Category::inRandomOrder()->first()->id,
                'dealer_id' => Dealer::inRandomOrder()->first()->id,
                'name' => $car['name'],
                'slug' => Str::slug($car['name']),
                'brand' => $car['brand'],
                'model' => $car['model'],
                'year' => fake()->numberBetween(2018, 2024),
                'price' => $car['price'],
                'mileage' => fake()->numberBetween(0, 100000),
                'transmission' => fake()->randomElement(['automatic', 'manual']),
                'fuel_type' => fake()->randomElement(['petrol', 'diesel', 'hybrid']),
                'condition' => fake()->randomElement(['new', 'used', 'certified']),
                'body_type' => $car['body_type'],
                'engine_size' => fake()->randomFloat(1, 1.0, 5.0),
                'doors' => fake()->numberBetween(2, 5),
                'cylinders' => fake()->numberBetween(3, 8),
                'color' => [fake()->colorName()],
                'drive_type' => fake()->randomElement(['fwd', 'rwd', 'awd', '4x4']),
                'description' => fake()->paragraphs(3, true),
                'interior_features' => [
                    'Air Conditioner',
                    'Digital Odometer',
                    'Leather Seats',
                    'Panoramic Moonroof',
                    'Touchscreen Display',
                ],
                'exterior_features' => [
                    'Fog Lights Front',
                    'Rain Sensing Wiper',
                    'Rear Spoiler',
                    'Windows - Electric',
                ],
                'safety_features' => [
                    'Anti-lock Braking',
                    'Brake Assist',
                    'Child Safety Locks',
                    'Driver Air Bag',
                    'Stability Control',
                ],
                'comfort_features' => [
                    'Android Auto',
                    'Apple CarPlay',
                    'Bluetooth',
                    'HomeLink',
                    'Power Steering',
                ],
                'is_featured' => fake()->boolean(20),
                'is_sold' => fake()->boolean(10),
                'is_active' => true,
            ]);
        }
    }
}
