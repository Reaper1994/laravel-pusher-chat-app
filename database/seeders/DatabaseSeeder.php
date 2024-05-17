<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @param User
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('Admin@123'),
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'osmar@example.com',
            'password' => Hash::make('Admin@123'),
        ]);

        User::factory(3)->create([
            'password' => Hash::make('Admin@123'),
        ]);


    }
}
