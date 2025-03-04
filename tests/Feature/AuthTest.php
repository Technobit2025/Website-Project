<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;

class AuthTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    #[\PHPUnit\Framework\Attributes\Test] 
    public function authenticated_user_can_be_retrieved()
    {
        $user = User::factory()->create();
        
        $response = $this->actingAs($user, 'sanctum')
            ->getJson('/api/user');
        
        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'data' => [
                'id' => $user->id,
                'email' => $user->email,
            ]
        ]);
    }
    

    #[\PHPUnit\Framework\Attributes\Test] 
    public function it_can_get_all_users()
    {
        User::factory(4)->create(); // Membuat 4 user
        $response = $this->getJson('/api/users');

        $response->assertOk()
                 ->assertJsonCount(User::count()); // Sesuaikan dengan jumlah user dalam database
    }

    #[\PHPUnit\Framework\Attributes\Test] 
    public function it_can_create_a_user()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->postJson('/api/user', $userData);

        $response->assertCreated()
                 ->assertJson(fn (AssertableJson $json) =>
                    $json->where('message', 'User created successfully')
                         ->has('data.id')
                         ->where('data.name', 'John Doe')
                         ->where('data.email', 'johndoe@example.com')
                 );

        $this->assertDatabaseHas('users', [
            'email' => 'johndoe@example.com'
        ]);
    }

    #[\PHPUnit\Framework\Attributes\Test] 
    public function it_can_update_a_user()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $updateData = ['name' => 'Updated Name'];

        $response = $this->putJson("/api/user/{$user->id}", $updateData);

        $response->assertOk()
                 ->assertJson([
                     'message' => 'User updated successfully',
                     'data' => ['name' => 'Updated Name'],
                 ]);

        $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Updated Name']);
    }

    #[\PHPUnit\Framework\Attributes\Test] 
    public function it_can_delete_a_user()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $response = $this->deleteJson("/api/user/{$user->id}");

        $response->assertOk()
                 ->assertJson([
                     'message' => 'User deleted successfully',
                 ]);

        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}
