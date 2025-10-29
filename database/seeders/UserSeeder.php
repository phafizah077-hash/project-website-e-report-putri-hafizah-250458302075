<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            // array(
            //     'name'  =>  'Admin',
            //     'email'  =>  'admin@gmail.com',
            //     'username'  =>  'admin',
            //     'password'  =>  Hash::make('12345'),
            //     'role' => 1
            // ),
            array(
                'name'  =>  'User',
                'email'  =>  'user@gmail.com',
                'username'  =>  'user',
                'password'  =>  Hash::make('12345'),
                'role'  => 2
            ),
            );
    }
}
