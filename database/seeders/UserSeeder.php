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
            'name' => 'Salman Abbas',
            'email' => 'salmanabbas985@gmail.com',
            'is_admin' => 1,
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'JohnDoe@gmail.com',
            'is_admin' => 0,
            'password' => Hash::make('123456789'),
        ]);
    }
}
