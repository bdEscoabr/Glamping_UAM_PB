<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CabinLevel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CabinLevel::factory()->count(10)->make();

        $this->call([
            UserSeeder::class,
            CabinLevelSeeder::class,
        ]);
    }
}