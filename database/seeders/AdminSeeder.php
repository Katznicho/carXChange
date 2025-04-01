<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Nicholas Katende',
            'email' => 'katznicho@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}