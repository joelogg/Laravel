<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuariosModuleTest extends TestCase
{
    /** @test   */
    function it_loads_the_users_list_page()
    {
        $response = $this->get('/usuarios');
        $response->assertStatus(200);
        $response->assertSee('Usuarios');
    }

    /** @test */
    function it_load_the_nuevo_usuario()
    {
        $response = $this->get('/usuarios/nuevo');
        $response->assertStatus(200);
        $response->assertSee('Crear nuevo usuario');
    }

    
}
