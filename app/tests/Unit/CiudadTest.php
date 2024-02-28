<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
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

        $this->assertDatabaseCount('ciudad', 30);
    }

}
