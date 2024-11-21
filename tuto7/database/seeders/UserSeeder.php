<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Example',
            'email' => 'mail@example.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'id' => 2,
            'name' => 'Example 2',
            'email' => 'mail2@example.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'id' =>3,
            'name' => 'Example 3',
            'email' => 'mail3@example.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'id' => 4,
            'name' => 'Example 4',
            'email' => 'mail4@example.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
