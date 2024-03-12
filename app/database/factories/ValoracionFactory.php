<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Usuario;
use App\Models\Jet;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ValoracionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'puntuacion' => random_int(1, 5),
            'comentario' => Str::random(100),
            'usuario_id' => Usuario::factory(),
            'jet_id' => Jet::factory(),
        ];
    }
}
