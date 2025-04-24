<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Note::class;
    public function definition(): array
    {
        return [
            'Title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
