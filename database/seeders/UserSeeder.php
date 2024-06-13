<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create multiple users
        $user = [
            [
                'name' => 'Farah',
                'phone' => '081234567890',
                'email' => 'farahnabilahaibah@mail.ugm.ac.id',
                'password' => bcrypt('Farah-3011'),
            ],
            [
                'name' => 'User',
                'phone' => '085673849246',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12345d'),
            ],
        ];

        //Insert the user into the database
        DB::table('users')->insert($user);
    }
}
