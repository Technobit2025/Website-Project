<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\API\APIController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends APIController
{
    protected $hidden = ['password'];
    protected $user;
    public function __construct()
    {
        if (Auth::check()) {
            $this->user = User::find(Auth::user()->id);
        }
    }
    // Get all users
    public function index()
    {
        $users = User::all();
        return $this->successResponse($users);
    }

    // Get a single user by ID
    public function show()
    {
        if (!$this->user) {
            return $this->notFoundResponse('User not found');
        }
        return $this->successResponse($this->user);
    }

    // Create a new user
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role_id' => 'required|integer|exists:roles,id',
        ]);

        if ($validator->fails()) {
            return $this->clientErrorResponse($validator->errors(), 'Validation errors', 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'role_id' => $request->role_id,
        ]);

        return $this->createdResponse($user, 'User created successfully');
    }

    // Update an existing user
    public function update(Request $request)
    {
        if (!$this->user) {
            return $this->notFoundResponse('User not found');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $this->user->id,
            'username' => 'sometimes|required|string|max:255|unique:users,username,' . $this->user->id,
            'password' => 'sometimes|required|string|min:8',
            'role_id' => 'sometimes|required|integer|exists:roles,id',
        ]);

        if ($validator->fails()) {
            return $this->clientErrorResponse($validator->errors(), 'Validation errors', 422);
        }

        $this->user->update($request->only('name', 'email', 'username', 'role_id'));
        if ($request->filled('password')) {
            $this->user->password = $request->password;
            $this->user->save();
        }

        return $this->successResponse($this->user, 'User updated successfully');
    }

    // Delete a user
    public function destroy()
    {
        if (!$this->user) {
            return $this->notFoundResponse('User not found');
        }

        $this->user->delete();
        return $this->successResponse(null, 'User deleted successfully');
    }
}
