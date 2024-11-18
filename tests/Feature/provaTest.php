<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class provaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        //Arrange/Preparació
        $user = User::factory()->create();

        //Act/Acció
        $response = $this->actingAs($user)->get('/dashboard');

        //Assert/Verificació
        $response->assertStatus(200); //200->ok
        $response->assertSee('Dashboard');

    }
}
