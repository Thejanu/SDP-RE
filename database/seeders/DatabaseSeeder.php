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
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@esoft.academy',
            'password' => Hash::make('Admin@1234')
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@esoft.academy',
            'password' => Hash::make('User@1234')
        ]);
    }
}
