<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,
            CategoriesSeeder::class,
            PostSeeder::class,
            PermissionsSeeder::class,
            CommentsSeeder::class,
            NotificationSeeder::class,
            AlertSeeder::class,
            PartnerSeeder::class,
            PageSeeder::class,
        ]);
    }
}
