<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Services\ChangePasswordService;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;

class ChangePasswordTest extends TestCase
{
    use RefreshDatabase;

    public function test_change_password_successfully()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $service = new ChangePasswordService();
        $result = $service->changePassword('oldpassword', 'newpassword');

        $this->assertTrue($result);
        $this->assertTrue(Hash::check('newpassword', $user->refresh()->password));
    }

    public function test_change_password_fails_with_wrong_current_password()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $service = new ChangePasswordService();
        $result = $service->changePassword('wrongpassword', 'newpassword');

        $this->assertFalse($result);
        $this->assertTrue(Hash::check('oldpassword', $user->refresh()->password));
    }

    public function test_change_password_fails_when_user_not_authenticated()
    {
        Auth::shouldReceive('user')->andReturn(null);

        $service = new ChangePasswordService();
        $result = $service->changePassword('oldpassword', 'newpassword');

        $this->assertFalse($result);
    }

    public function test_password_change_fails_due_to_unconfirmed_password()
    {
        $request = new ChangePasswordRequest();

        $data = [
            'current_password' => 'oldpassword',
            'new_password' => 'newpassword',
            'new_password_confirmation' => 'wrongconfirmation', // Salah konfirmasi password
        ];

        $validator = Validator::make($data, $request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('new_password', $validator->errors()->toArray());
    }
}