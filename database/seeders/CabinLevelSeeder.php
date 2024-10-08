<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CabinLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabin_levels')->insert([
            'name' => "VIP",
            'description' =>"Cabañas para gente importante",
        ]);

        DB::table('cabin_levels')->insert([
            'name' => "Basica",
            'description' =>"Cabañas para gente normal",
        ]);
    }
}
