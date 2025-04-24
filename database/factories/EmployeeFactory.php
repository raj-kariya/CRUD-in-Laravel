<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=> $this->faker->name(),
            'email'=> $this->faker->unique()->safeEmail(),
            'country_id'=> $this->faker->numberBetween(1, 10),
        ];
    }
}
