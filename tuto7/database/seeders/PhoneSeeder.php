<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix' => 57,
            'phone_number' => 3007725367,
            'user_id' => 1
        ]);

        Phone::create([
            'prefix' => 57,
            'phone_number' => 3238305353,
            'user_id' => 1
        ]);

        Phone::create([
            'prefix' => 57,
            'phone_number' => 3005235687,
            'user_id' => 2
        ]);
    }
}
