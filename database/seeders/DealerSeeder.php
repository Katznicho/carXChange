<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DealerSeeder extends Seeder
{
    public function run(): void
    {
        $dealers = [
            'Victoria Motors',
            'Toyota Uganda',
            'Premium Cars',
            'Auto World',
            'Car Max Uganda',
        ];

        foreach ($dealers as $dealer) {
            Dealer::create([
                'name' => $dealer,
                'email' => Str::slug($dealer) . '@example.com',
                'password' => bcrypt('password'),
                'phone' => fake()->phoneNumber(),
                'address' => fake()->address(),
                'description' => fake()->paragraph(),
                'is_active' => true,
            ]);
        }
    }
}
