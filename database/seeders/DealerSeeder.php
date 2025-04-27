<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DealerSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        
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
                'email' => Str::slug($dealer).'@example.com',
                'password' => bcrypt('password'),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address(),
                'description' => $faker->paragraph(),
                'is_active' => true,
            ]);
        }
    }
}
