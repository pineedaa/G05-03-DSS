<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use \App\Models\Aeropuerto;

class AeropuertoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_creacion_de_aeropuertos()
    {
        Aeropuerto::factory()
            ->count(10)
            ->create();

        $this->assertDatabaseCount('aeropuerto', 10);
    }
}
