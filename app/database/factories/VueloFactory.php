<?php

namespace Database\Factories;

use \App\Models\Ciudad;
use \App\Models\Jet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class VueloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_salida' => $this->faker->dateTime(),
            'fecha_llegada' => $this->faker->dateTime(),
            'jet_id' => Jet::factory(),
            'ciudad_origen_id' => Ciudad::factory(),
            'ciudad_destino_id' => Ciudad::factory()
        ];
    }
}
