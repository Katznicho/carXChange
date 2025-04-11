<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $cars = Car::all();

        foreach ($cars as $car) {
            $numberOfReviews = rand(3, 8);
            
            for ($i = 0; $i < $numberOfReviews; $i++) {
                Review::create([
                    'car_id' => $car->id,
                    'reviewer_name' => fake()->name(),
                    'reviewer_email' => fake()->safeEmail(),
                    'comment' => fake()->paragraph(),
                    'rating' => fake()->randomFloat(1, 3.0, 5.0),
                    'is_approved' => true,
                ]);
            }
        }
    }
}