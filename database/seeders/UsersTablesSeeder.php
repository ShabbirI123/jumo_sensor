<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Admin',
            'email'    => 'admin@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  str_random(10),
        ]);
    }
}
