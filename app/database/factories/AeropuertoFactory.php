<?php

namespace Database\Factories;

use \App\Models\Ciudad;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aeropuerto>
 */
class AeropuertoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => 'Aeropuerto ' . $this->faker->company(),
            'ciudad_id' => Ciudad::factory(),
        ];
    }
}
