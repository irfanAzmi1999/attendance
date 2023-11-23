<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
//            'name' => fake()->name(),
//            'email' => fake()->unique()->safeEmail(),
//            'email_verified_at' => now(),
//            'password' => hash('md5','12345'), // password
//            'remember_token' => Str::random(10),
//            'username' => 'tester',
//            'shortname' => 'tester',
//            'department' => 'Software Development Team'

            'name' => 'tester',
            'email' => 'tester@gmail.com',
            'email_verified_at' => now(),
            'password' => hash::make('12345678'), // password
            'remember_token' => Str::random(10),
            'username' => 'tester',
            'shortname' => 'tester',
            'department' => 'Software Development Team'
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
