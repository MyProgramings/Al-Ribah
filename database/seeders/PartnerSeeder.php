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
            'image' => "1.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "2.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "3.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "4.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "5.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "6.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "7.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "8.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "9.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "10.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "11.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "12.webp",
        ]);
        DB::table('partners')->insert([
            'image' => "13.webp",
        ]);
    }
}
