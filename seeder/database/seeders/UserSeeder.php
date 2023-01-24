<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();

        User::create([
           'name' => 'samir',
           'email' => 'asdas@gmail.com',
           'password' => '12345678'
        ]);

        User::create([
            'name' => 'ahemd',
            'email' => 'hekeko@gmail.com',
            'password' => '12345678'
        ]);
    }
}
