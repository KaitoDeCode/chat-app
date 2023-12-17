<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AlbumContact;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Adi Kurniawan",
            "email" => "kurniawan@gmail.com",
            "password"=> Hash::make("password")
        ]);

        User::create([
            "name" => "Kaito",
            "email" => "kaito@gmail.com",
            "password"=> Hash::make("password")
        ]);

        User::create([
            "name" => "Najay",
            "email" => "najay@gmail.com",
            "password"=> Hash::make("password")
        ]);

        AlbumContact::create([
            "user_id" => 1,
        ]);

        AlbumContact::create([
            "user_id" => 2,
        ]);

        AlbumContact::create([
            "user_id" => 3,
        ]);

        Contact::create([
            "user_id" => 1,
            "noTelp" => "+62 0895385285001"
        ]);

        Contact::create([
            "user_id" => 2,
            "noTelp" => "+62 0888888888888"
        ]);

        Contact::create([
            "user_id" => 3,
            "noTelp" => "+62 0899999999999"
        ]);

    }
}
