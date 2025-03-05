<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Emil Riza putra',
            'email' => 'emilriza@gmail.com',
            'password' => \bcrypt('Emil123')
        ];

        User::insert($user);
    }
}
