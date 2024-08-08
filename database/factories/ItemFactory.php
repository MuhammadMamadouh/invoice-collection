<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'item_type_id'             => $this->faker->numberBetween(1, 100),
            'company_id'               => $this->faker->unique()->numberBetween(1, 100000),
            'status_id'                => $this->faker->unique()->numberBetween(1, 100000),
            'po_no'                    => $this->faker->unique()->randomNumber(5, true),
            'file_no'                  => $this->faker->unique()->randomNumber(5, true),
            'erp_item_type'            => $this->faker->word,
            'sales_manager'            => $this->faker->name,
            'business_case'            => $this->faker->sentence,
            'sales_administrative'     => $this->faker->name,
            'customer_custom_field_1'  => $this->faker->word,
            'customer_custom_field_2'  => $this->faker->word,
            'order_date'               => $this->faker->date(),
            'issue_date'               => $this->faker->date(),
            'due_date'                 => $this->faker->date(),
            'payment_date'             => $this->faker->date(),
            'currency_id'              => $this->faker->numberBetween(1, 100),
            'initial_amount_exc_tax'   => $this->faker->randomFloat(2, 100, 1000),
            'initial_amount_inc_tax'   => $this->faker->randomFloat(2, 110, 1100),
            'remaining_amount_exc_tax' => $this->faker->randomFloat(2, 50, 500),
            'remaining_amount_inc_tax' => $this->faker->randomFloat(2, 55, 550),
        ];
    }
}