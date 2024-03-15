<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
        ]);

        User::factory(10)->create();
        \App\Models\Post::factory(30)->create();
        \App\Models\Comment::factory(30)->create();
    }
}
