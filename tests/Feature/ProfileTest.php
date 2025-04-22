<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test retrieving the authenticated user's profile.
     */
    #[\PHPUnit\Framework\Attributes\Test]
    public function it_can_show_authenticated_user_profile()
    {
        // Create and authenticate a user
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        // Send request to show profile
        $response = $this->getJson('/api/v1/profile/user');

        // Assert successful response
        $response->assertOk()
                 ->assertJson([
                     'message' => 'User retrieved successfully',
                     'data' => [
                         'id' => $user->id,
                         'name' => $user->name,
                         'email' => $user->email,
                     ],
                 ]);
    }

    /**
     * Test updating the authenticated user's profile.
     */
    #[\PHPUnit\Framework\Attributes\Test]
    public function it_can_update_user_profile()
    {
        // Create and authenticate a user with a known password
        $user = User::factory()->create([
            'password' => Hash::make('password123')
        ]);
        Sanctum::actingAs($user);

        // Update data without changing password
        $updateData = [
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
        ];
        
        $response = $this->putJson('/api/v1/profile/user', $updateData);

        // Assert successful response
        $response->assertOk()
                 ->assertJson([
                     'message' => 'User updated successfully',
                     'data' => [
                         'name' => 'Updated Name',
                         'email' => 'updated@example.com',
                     ],
                 ]);

        // Assert database was updated
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
        ]);
    }


    // #[\PHPUnit\Framework\Attributes\Test]
    // public function password_must_contain_uppercase_letter()
    // {
    // $user = User::factory()->create([
    //     'email' => 'superadmin@gmail.com',
    //     'password' => Hash::make('superadmin'),
    // ]);
    // Sanctum::actingAs($user);
    
   
    // $response = $this->followingRedirects()->put(route('profile.update'), [
    //     'name' => 'Updated Name',
    //     'email' => 'updated.email@example.com',
    //     'current_password' => 'superadmin',
    //     'password' => 'newpassword123', // No uppercase
    //     'password_confirmation' => 'newpassword123',
    // ]);
    
    // $response->assertStatus(302)
    //          ->assertSessionHasErrors('password');
    // }
    /**
     * Test updating the authenticated user's password.
     */
    // #[\PHPUnit\Framework\Attributes\Test]
    // public function user_can_update_profile_with_password_change()
    // {
    //     // Create test user with plain password
    //     $plainPassword = 'Superadmin';
    //     $user = User::factory()->create([
    //         'email' => 'superadmin@gmail.com',
    //         'password' => Hash::make($plainPassword),
    //     ]);
        
    //     $this->actingAs($user);
        
    //     // Add debugging output
    //     \Log::info('Testing user password update', [
    //         'user_id' => $user->id,
    //         'hashed_password' => $user->password,
    //         'plain_password' => $plainPassword,
    //         'hash_check' => Hash::check($plainPassword, $user->password)
    //     ]);
        
    //     $response = $this->put(route('profile.update'), [
    //         'name' => 'Updated Name',
    //         'email' => 'updated.email@example.com',
    //         'current_password' => $plainPassword,
    //         'password' => 'Newpassword123',
    //         'password_confirmation' => 'Newpassword123',
    //     ]);
        
    //     // Debug response content
    //     \Log::info('Response content', [
    //         'status' => $response->getStatusCode(),
    //         'content' => $response->getContent(),
    //     ]);
        
    //     $response->assertStatus(200)
    //             ->assertJson([
    //                 'status' => 'success',
    //                 'message' => 'User updated successfully',
    //             ]);
                
    //     $user->refresh();
    //     $this->assertTrue(Hash::check('Newpassword123', $user->password));
    // }





    /**
     * Test attempt to update password with incorrect current password.
     */
    #[\PHPUnit\Framework\Attributes\Test]
    public function it_rejects_password_update_with_wrong_current_password()
    {
        // Create and authenticate a user with a known password
        $user = User::factory()->create([
            'password' => Hash::make('password123')
        ]);
        Sanctum::actingAs($user);

        // Update data with incorrect current password
        $updateData = [
            'name' => 'Updated Name',
            'current_password' => 'wrongpassword',
            'password' => 'newpassword456',
        ];
        
        $response = $this->putJson('/api/v1/profile/user', $updateData);

        // Assert error response
        $response->assertStatus(400)
                 ->assertJsonPath('errors.current_password', 'Password lama salah.');

        // Assert password was not updated
        $this->assertFalse(Hash::check('newpassword456', $user->fresh()->password));
    }

    /**
     * Test updating the employee information.
     */
    #[\PHPUnit\Framework\Attributes\Test]
    public function it_can_update_employee_information()
    {
        // Create and authenticate a user
        $user = User::factory()->create();
        // Create an employee linked to the user
        $employee = Employee::factory()->create([
            'user_id' => $user->id,
            'position' => 'Developer',
            'department' => 'IT',
        ]);
        
        Sanctum::actingAs($user);

        // Update employee data
        $updateData = [
            'position' => 'Senior Developer',
            'department' => 'Engineering',
        ];
        
        $response = $this->putJson('/api/profile/employee', $updateData);

        // Assert successful response
        $response->assertOk()
                 ->assertJson([
                     'message' => 'Employee updated successfully',
                     'data' => [
                         'position' => 'Senior Developer',
                         'department' => 'Engineering',
                     ],
                 ]);

        // Assert database was updated
        $this->assertDatabaseHas('employees', [
            'id' => $employee->id,
            'user_id' => $user->id,
            'position' => 'Senior Developer',
            'department' => 'Engineering',
        ]);
    }

    /**
     * Test attempt to update employee info when employee record doesn't exist.
     */
    #[\PHPUnit\Framework\Attributes\Test]
    public function it_returns_error_when_employee_not_found()
    {
        // Create and authenticate a user without an employee record
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        // Attempt to update non-existent employee
        $updateData = [
            'position' => 'Senior Developer',
            'department' => 'Engineering',
        ];
        
        $response = $this->putJson('/api/profile/employee', $updateData);

        // Assert error response
        $response->assertStatus(404)
                 ->assertJson([
                     'message' => 'Employee not found',
                 ]);
    }

    /**
     * Test authentication required for profile access.
     */
    #[\PHPUnit\Framework\Attributes\Test]
    public function it_requires_authentication_for_profile_access()
    {
        // No authentication - should be redirected or unauthorized
        $response = $this->getJson('/api/profile');
        $response->assertUnauthorized();
        
        $response = $this->putJson('/api/profile', ['name' => 'Test']);
        $response->assertUnauthorized();
        
        $response = $this->putJson('/api/profile/employee', ['position' => 'Manager']);
        $response->assertUnauthorized();
    }
}