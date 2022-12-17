<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

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


        // for user seeding
        User::create([
            'name' => 'bijoy',
            'email'=>'bijoy@gmail.com',
            'role' => 'user',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'admin',
            'email'=>'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'editor',
            'email'=>'editor@gmail.com',
            'role' => 'editor',
            'password' => bcrypt('12345678')
        ]);


        // for posts seeding
        Post::factory(8)->create();
    }
}
