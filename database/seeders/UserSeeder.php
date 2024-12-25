<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'level' => 'admin',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'level' => 'user',
        ]);

        User::create([
            'name' => 'Ramadhan Abelio Nusa Putra',
            'email' => 'ramadhan.abelio@example.com',
            'password' => Hash::make('password'),
            'level' => 'user',
        ]);
    }
}
