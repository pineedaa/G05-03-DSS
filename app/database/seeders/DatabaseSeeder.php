<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Usuario::factory()
            ->count(10)
            ->create();

        \App\Models\Ciudad::factory()
            ->count(10)
            ->create();

        \App\Models\Valoracion::factory()
            ->count(10)
            ->create();

        \App\Models\Vuelo::factory()
            ->count(10)
            ->create();

        \App\Models\Jet::factory()
            ->count(10)
            ->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
