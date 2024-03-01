<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Usuario;
use App\Models\Ciudad;
use App\Models\Aeropuerto;

class RelacionesTest extends TestCase
{
    /**
     * Comprueba la relacion Usuario-Ciudad
     */
    public function testRelacionUsuarioCiudad()
    {
        $ciudad = new Ciudad();
        $ciudad->ciudad = "Alicante";

        $usuario = new Usuario();
        $usuario->nombre = "Pepe";
        $usuario->ciudad = $ciudad;

        $this->assertEquals($usuario->ciudad->nombre, "Alicante");
        $this->assertEquals($ciudad->usuarios[0]->nombre, "Pepe");

        $ciudad->delete();
        $usuario->delete();
    }
    /**
     * Comprueba la relacion Aeropuerto-Ciudad
     */
    public function testRelacionAeropuertoCiudad()
    {
        $ciudad = new Ciudad();
        $ciudad->ciudad = "Alicante";

        $aeropuerto = new Aeropuerto();
        $aeropuerto->nombre = "AeropuertoPrueba";
        $aeropuerto->ciudad = $ciudad;

        $this->assertEquals($aeropuerto->ciudad->nombre, "Alicante");
        $this->assertEquals($ciudad->aeropuertos[0]->nombre, "AeropuertoPrueba");

        $ciudad->delete();
        $aeropuerto->delete();
    }
}
