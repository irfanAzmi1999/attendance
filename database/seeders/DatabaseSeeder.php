<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create();
//
        \App\Models\User::factory()->create([
           'name' => 'tester2',
            'email' => 'tester2@gmail.com',
            'email_verified_at' => now(),
            'password' => hash::make('12345678'), // password
            'remember_token' => Str::random(10),
            'username' => 'tester2',
            'shortname' => 'tester2',
            'department' => 'Software Development Team',
        ]);
    }
}
