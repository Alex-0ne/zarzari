<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fumigada>
 */
class FumigadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'producto' => ucfirst(fake()->word()),
            'sector' => ucfirst(fake()->word()),
            'fecha' => fake()->dateTimeBetween('-6 month','now'),
        ];
    }
}
