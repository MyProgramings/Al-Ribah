<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => "Eyad Hasan",
            'email' => "admin@alribbah.org",
            'email_verified_at' => now(),
            'password' => bcrypt('11111111'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => "Mohamed Ali",
            'email' => "user_active@alribbah.org",
            'email_verified_at' => now(),
            'password' => bcrypt('11111111'),
            'role_id' => 3,
        ]);
    }
}
