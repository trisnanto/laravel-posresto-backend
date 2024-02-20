<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Anto Test',
            'email' => 'anto@anto.com',
            'password' => Hash::make('12341234'),
            'role' => 'admin',
            'phone' => '081212341234'
        ]);

        \App\Models\User::factory(4)->create();

    }
}
