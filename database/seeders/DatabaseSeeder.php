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
            'first_name' => 'Franklin',
            'last_name' => 'Silva',
            'email' => 'franklin@email.com',
        ]);
        
        // $this->call(UserSeeder::class);

        // $this->call(UserImageSeeder::class);

    }
}
