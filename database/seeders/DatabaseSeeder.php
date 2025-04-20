<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
            DealerSeeder::class,
            CarSeeder::class,
            ReviewSeeder::class,
            BlogSeeder::class,
        ]);
    }
}
