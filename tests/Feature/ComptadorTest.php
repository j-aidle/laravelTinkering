<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ComptadorTest extends TestCase
{
    #[Test] public function increment_counter(): void
    {
        //Act
        $response = $this->post('/incrementar');

        //Assert
        $response->assertStatus(302); //302->redirect ja que redirigim a /comptador
        $this->assertEquals(1,session('comptador'));
    }

    #[test] public function decrement_counter(): void
    {
        //Act
        $this->post('/decrementar');


        $response = $this->followingRedirects()->get('/comptador');
        
        //Assert
        $response->assertStatus(200);
        $response->assertSee('Decrementar');
        $this->assertEquals(-1,session('comptador'));
    }

    #[test] public function reset_counter(): void
    {
        //arrage
        session(['comptador']);

        //Act
        $response = $this->post('/reset');

        //Assert
        $response->assertStatus(302);
        $this->assertEquals(0, session('comptador'));

    }

}
