<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Faker\Generator as Faker;
use \App\Models\Ciudad;

class CiudadTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_creacion_de_ciudades()
    {
        Ciudad::factory()
            ->count(30)
            ->create();

        // Verificar que se crearon 30 CiudadTest
        $this->assertEquals(30, Ciudad::count());
    }

}
