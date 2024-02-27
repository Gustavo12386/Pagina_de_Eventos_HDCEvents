<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreMethod()
    {
        // metodo de substituição de arquivos reais por fake 
        Storage::fake('public');
       
        // criar instâncias de modelos ficticios
        $user = User::factory()->create();
        //autenticar usuario
        $this->actingAs($user);

        $response = $this->post('/events', [
            'title' => 'Test Event',
            'city' => 'Test City',
            'private' => false,
            'description' => 'Test description',
            'items' => 'Test items',
            'date' => '2024-02-27',
            'image' => UploadedFile::fake()->image('test.jpg')
        ]);

        $response->assertRedirect('/');
        $response->assertSessionHas('msg', 'Evento criado com sucesso!');

        $this->assertDatabaseHas('events', [
            'title' => 'Test Event',
            'city' => 'Test City',
            'private' => false,
            'description' => 'Test description',
            'items' => 'Test items',
            'date' => '2024-02-27',
            'image' => 'test.jpg',
            'user_id' => $user->id
        ]);

        $this->assertFileExists(public_path('img/events/test.jpg'));

    }
}
