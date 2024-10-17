<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Cabin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cabins')->delete();
        Cabin::create([
        'name' => 'VIP',
        'price' => 100,
        'expiration' => Carbon::parse('2022-10-15'),
        'user_id' => User::all()->random()->id,
        ]);

        Cabin::create([
        'name' => 'Premium',
        'price' => 200,
        'expiration' => Carbon::parse('2022-12-03'),
        'user_id' => User::all()->random()->id,
        ]);

        Cabin::create([
            'name' => 'Basica',
            'price' => 300,
            'expiration' => Carbon::parse('2022-12-22'),
            'user_id' => User::all()->random()->id,
            ]);
           
    }
}
