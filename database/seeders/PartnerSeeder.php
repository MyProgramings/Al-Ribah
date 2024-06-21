<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'image' => "1.png",
        ]);
        DB::table('partners')->insert([
            'image' => "2.png",
        ]);
        DB::table('partners')->insert([
            'image' => "3.png",
        ]);
        DB::table('partners')->insert([
            'image' => "4.png",
        ]);
        DB::table('partners')->insert([
            'image' => "5.png",
        ]);
        DB::table('partners')->insert([
            'image' => "6.png",
        ]);
        DB::table('partners')->insert([
            'image' => "7.png",
        ]);
        DB::table('partners')->insert([
            'image' => "8.png",
        ]);
        DB::table('partners')->insert([
            'image' => "9.png",
        ]);
        DB::table('partners')->insert([
            'image' => "10.png",
        ]);
        DB::table('partners')->insert([
            'image' => "11.png",
        ]);
        DB::table('partners')->insert([
            'image' => "12.png",
        ]);
        DB::table('partners')->insert([
            'image' => "13.png",
        ]);
    }
}
