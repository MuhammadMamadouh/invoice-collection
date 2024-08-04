<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

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
    public function definition(): array
    {
        return [
            'first_name'            => fake()->name(),
            'last_name'             => fake()->name(),
            'email'                 => fake()->unique()->safeEmail(),
            'email_verified_at'     => now(),
            'password'              => bcrypt('123445678'),
            'remember_token'        => Str::random(10),
            'picture'               => fake()->imageUrl(),
            'phone'                 => fake()->phoneNumber(),
            'mobile_phone'          => fake()->phoneNumber(),
            'fax'                   => fake()->phoneNumber(),
            'function'              => fake()->text(30),
            'id_number'             => fake()->numberBetween(100000, 999999),
            'active'                => fake()->boolean(),
            'role_id'               => Role::all()->random()->id,
            'is_super_admin'        => 0,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
