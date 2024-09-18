<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corte>
 */
class CorteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num_cajas' => fake()->numberBetween(100,500),
            'tipo_caja' => ucfirst(fake()->word()),
            'fecha_corte' => fake()->dateTimeBetween('-1 year','now'),
        ];
    }
}
