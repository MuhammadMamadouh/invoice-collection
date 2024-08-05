<?php

namespace Database\Factories;
use App\Models\ActionType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Action>
 */
class ActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'en_name'        => $this->faker->name,
            'number_of_days' => $this->faker->numberBetween(1, 365),
            'actionType_id'  => ActionType::get()->random()->id,
        ];
    }
}