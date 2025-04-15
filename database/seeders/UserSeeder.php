<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'first_name' => 'Jon',
            'last_name'  => 'Do',
            'email'      => 'admin@gmail.com',
            'mobile'     => '01700000000',
            'password'   => Hash::make('password'),
        ]);
    }
}
