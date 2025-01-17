<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => "زراعة",
            'slug' => "زراعة",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // DB::table('categories')->insert([
        //     'title' => "ثقافة",
        //     'slug' => "ثقافة",
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // DB::table('categories')->insert([
        //     'title' => "إقتصاد",
        //     'slug' => "إقتصاد",
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // DB::table('categories')->insert([
        //     'title' => "فن",
        //     'slug' => "فن",
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // DB::table('categories')->insert([
        //     'title' => "تعليم",
        //     'slug' => "تعليم",
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // DB::table('categories')->insert([
        //     'title' => "تكنولوجيا",
        //     'slug' => "تكنولوجيا",
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);
    }
}
