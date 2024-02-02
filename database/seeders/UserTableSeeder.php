<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'status' => '1',
            ],
            [
                'name' => 'Instructor User',
                'username' => 'instructor',
                'email' => 'instructor@instructor.com',
                'password' => Hash::make('12345678'),
                'role' => 'instructor',
                'status' => '1',
            ],[
                'name' => 'User User',
                'username' => 'user',
                'email' => 'user@user.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'status' => '1',
            ],
        ]);
    }
}