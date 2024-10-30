<?php

namespace Database\Seeders;

use App\Models\Child;
use App\Models\School;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'bony',
            'email' => 'bony@gmail.com',
            'password' => bcrypt('bony123')
        ]);

        Child::factory()->count(170)->create();
    }
}
