<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use \App\Models\Usuario;

class UsuarioTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_creacion_de_usuarios()
    {
        Usuario::factory()
            ->count(100)
            ->create();

        $this->assertDatabaseCount('usuarios', 100);
    }

}
