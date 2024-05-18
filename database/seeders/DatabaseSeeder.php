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

        $users = [
            ['name' => 'Test User', 'email' => 'test@example.com'],
            ['name' => 'Osmar99', 'email' => 'osmar@example.com'],
            ['name' => 'Snape194', 'email' => 'snape@example.com'],
            ['name' => 'Dumbledore001', 'email' => 'dumbledore@example.com'],
        ];

        foreach ($users as $userData) {
            User::factory()->create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make('Admin@123'),
            ]);
        }

        User::factory(3)->create([
            'password' => Hash::make('Admin@123'),
        ]);


    }
}
