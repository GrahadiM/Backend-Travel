<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'          => 'admin',
            'email'         => 'admin@test.com',
            'password'      => bcrypt('password'),
            'is_admin'      => 1,
            'access_level'  => 1
        ]);

        $pimpinan = User::create([
            'name'          => 'pimpinan',
            'email'         => 'pimpinan@test.com',
            'password'      => bcrypt('password'),
            'is_admin'      => 0,
            'access_level'  => 2
        ]);

        $guide = User::create([
            'name'          => 'guide',
            'email'         => 'guide@test.com',
            'password'      => bcrypt('password'),
            'is_admin'      => 0,
            'access_level'  => 3
        ]);

        $customer = User::create([
            'name'          => 'customer',
            'email'         => 'customer@test.com',
            'password'      => bcrypt('password'),
            'is_admin'      => 0,
            'access_level'  => 4
        ]);
    }
}
