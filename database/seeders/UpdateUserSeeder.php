<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UpdateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->where('role', '')->update(['role' => 'admin']);
    }
}
