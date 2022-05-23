<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'poulstar',
            'email' => env('USER_EMAIL', 'admin@landing.com'),
            'password' => Hash::make(env('USER_PASS', '123456'))
        ]);
    }
}
