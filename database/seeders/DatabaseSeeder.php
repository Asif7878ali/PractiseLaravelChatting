<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'firstname' => 'Test',
            'lastname' => 'Test',
            'email' => 'test@example.com',
            'password' => '1234',
        ]);
        User::factory()->create([
            'firstname' => 'Asif',
            'lastname' => 'Ali',
            'email' => 'ali@example.com',
            'password' => 'wasd',
            'admin' => true,
            'secretKey' => '123wasd',
        ]);
    }
}
