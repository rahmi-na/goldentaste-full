<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Databasegd extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'username'       => 'admin1',
                'password'       => bcrypt('12345'),
            ],
            [
                'id'             => 2,
                'name'           => 'User',
                'username'       => 'user1',
                'password'       => bcrypt('123'),
            ],
        ];

        User::insert($users);
    }
}