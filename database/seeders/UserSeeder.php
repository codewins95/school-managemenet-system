<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            [
                'name' => 'Mohan Gupta',
                'email' => 'super_admin@gmail.com',
                'password' => Hash::make('123456'),
                'user_type' => 1,
            ],
            [
                'name' => 'Shivam Pal',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'user_type' => 2,
            ],
            [
                'name' => 'Prakash Prabhakar',
                'email' => 'teacher@gmail.com',
                'password' => Hash::make('123456'),
                'user_type' => 3,
            ],
            [
                'name' => 'Sumit  Kumar',
                'email' => 'student@gmail.com',
                'password' => Hash::make('123456'),
                'user_type' => 4,
            ],
            [
                'name' => 'Sonu Sharma',
                'email' => 'parent@gmail.com',
                'password' => Hash::make('123456'),
                'user_type' => 5,
            ],
        ]);
    }
}
