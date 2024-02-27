<?php

namespace Tests\Feature;


use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestRoutes extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        // Faça uma requisição GET à rota
        $response = $this->get('/events/create');
    
        // Verifique se a rota retornou um código de status 200 (OK)
        $response->assertStatus(200);
    
        // Verifique se a rota retornou a view correta
        $response->assertViewIs('events.create');
    }
}
