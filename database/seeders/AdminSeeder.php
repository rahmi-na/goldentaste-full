<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admins::truncate();
        Admins::create([
                'id'             => 1,
                'name'           => 'Admin',
                'username'       => 'admin1',
                'password'       => bcrypt('12345'),
        ]);
        // $admins = [
        //     [
        //         'id'             => 1,
        //         'name'           => 'Admin',
        //         'username'       => 'admin1',
        //         'password'       => bcrypt('12345'),
        //     ],
        //     [
        //         'id'             => 2,
        //         'name'           => 'User',
        //         'username'       => 'user1',
        //         'password'       => bcrypt('123'),
        //     ],
        // ];

        // Admins::insert($admins);
    }
}