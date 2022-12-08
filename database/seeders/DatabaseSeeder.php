<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'address' => 'Gaindakot',
            'phone' => '1234567890',
            'password' => bcrypt('password'),
            'citizenship' => '6582-55636',
            'photopath0' => 'sophiya.jpg',
        ]);
        \App\Models\User::create([
            'name' => 'Sophiya',
            'email' => 'sophiya@gmail.com',
            'role' => 'admin',
            'address' => 'Gaindakot',
            'phone' => '1234567890',
            'password' => bcrypt('password'),
            'citizenship' => '6582-55686',
            'photopath0' => 'sophiya.jpg',
        ]);
    }
}
