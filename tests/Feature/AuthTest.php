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
            ->getJson('/api/v1/user');
        
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
                     ->getJson('/api/v1/users');

    // Check the response
    $response->assertOk()
             ->assertJsonPath('success', true)
             ->assertJsonCount(5, 'data'); 
    }

    // #[\PHPUnit\Framework\Attributes\Test] 
    // public function it_can_create_a_user()
    // {
    //     $authUser = User::factory()->create();
    
    // if (class_exists('\App\Models\Role')) {
    //     $role = \App\Models\Role::first();
        

    //     if (!$role) {
    //         $role = \App\Models\Role::create([
    //             'name' => 'User',
    //         ]);
    //     }
    //     $roleId = $role->id;
    // } else {
        
    //     $roleId = 1;
    // }
    
    
    // $userData = [
    //     'name' => 'John Doe',
    //     'email' => 'johndoe@example.com',
    //     'username' => 'johndoe',
    //     'password' => 'password12345',
    //     'role_id' => $roleId,
    // ];

   
    // $response = $this->actingAs($authUser, 'sanctum')
    //                  ->postJson('/api/v1/user', $userData);

    // $response->assertCreated()
    //          ->assertJson(fn (\Illuminate\Testing\Fluent\AssertableJson $json) =>
    //             $json->where('message', 'User created successfully')
    //                  ->has('data.id')
    //                  ->where('data.name', 'John Doe')
    //                  ->where('data.email', 'johndoe@example.com')
    //                  ->where('data.username', 'johndoe')
    //                  ->etc()
    //          );

    // $this->assertDatabaseHas('users', [
    //     'email' => 'johndoe@example.com',
    //     'username' => 'johndoe',
    // ]);
    // }


    #[\PHPUnit\Framework\Attributes\Test] 
    public function it_can_update_a_user()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);
        
        $updateData = ['name' => 'Updated Name'];
        
        // Ubah URL sesuai dengan route yang ada
        $response = $this->putJson("/api/v1/user", $updateData);
        
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
        $response = $this->deleteJson("/api/v1/user");
    
        $response->assertOk()
                 ->assertJson([
                     'message' => 'User deleted successfully',
                 ]);
    
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}
