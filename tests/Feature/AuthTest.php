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
    
    User::factory(4)->create();
    
    $user = User::factory()->create();
    
    $response = $this->actingAs($user, 'sanctum')
                     ->getJson('/api/users');

    // Check the response
    $response->assertOk()
             ->assertJsonPath('success', true)
             ->assertJsonCount(5, 'data'); 
    }

   


    #[\PHPUnit\Framework\Attributes\Test] 
    public function it_can_update_a_user()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);
        
        $updateData = ['name' => 'Updated Name'];
        
        // Ubah URL sesuai dengan route yang ada
        $response = $this->putJson("/api/user", $updateData);
        
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
    
        // Ubah URL sesuai dengan route yang ada (tanpa ID)
        $response = $this->deleteJson("/api/user");
    
        $response->assertOk()
                 ->assertJson([
                     'message' => 'User deleted successfully',
                 ]);
    
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}
