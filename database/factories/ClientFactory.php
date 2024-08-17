<?php

namespace Database\Factories;

use App\Models\CollectionScenario;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'company_name'                  => fake()->company(),
            'company_code'                  => fake()->numberBetween(100000, 999999),
            'trading_name'                  => fake()->company(),
            'legal_id'                      => fake()->numberBetween(100000, 999999),
            'vat_number'                    => fake()->numberBetween(100000, 999999),
            'business_line'                 => fake()->text(30),
            'collector_id'                  => User::collectors()->get()->random()->id,
            'collection_scenario_id'        => CollectionScenario::get()->random()->id,
            'address'                       => fake()->address(),
            'postal_code'                   => fake()->postcode(),
            'post_office_box'               => fake()->numberBetween(100000, 999999),
            'city'                          => fake()->city(),
            'state'                         => fake()->state(),
            'country'                       => fake()->country(),
            'website'                       => fake()->url(),
            'payment_term'                  => fake()->numberBetween(1, 30),
            'payment_mean'                  => fake()->text(30),
            'insurer_guarantee'             => fake()->numberBetween(100000, 999999),
            'other_guarantees'              => fake()->numberBetween(100000, 999999),
            'credit_limit'                  => fake()->numberBetween(100000, 999999),
            'late_payment_penalties'        => fake()->boolean(),
            'recovery_cost'                 => fake()->boolean(),
            'block_this_account'            => fake()->boolean(),
            'interactive_emails'            => fake()->boolean(),
            'customer_custom_field_1'       => fake()->text(30),
            'customer_custom_field_2'       => fake()->text(30),
        ];
    }
}
