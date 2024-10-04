<?php

namespace Database\Factories;
use App\Models\ActionType;
use App\Models\CollectionScenario;
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
            'action_name'            => $this->faker->name,
            'no_of_days'             => $this->faker->numberBetween(1, 365),
            'action_type_id'         => ActionType::get()->random()->id,
            'collection_scenario_id' => CollectionScenario::get()->random()->id,
        ];
    }
}
