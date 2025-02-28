<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->route('user')?->id ?? $this->user()?->id ?? 'NULL';

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $userId,
            'username' => 'required|unique:users,username,' . $userId,
            'password' => 'nullable|min:8|confirmed|regex:/^(?=.*[A-Z]).+$/',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'role_id' => 'nullable|exists:roles,id',
        ];

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['name'] = 'sometimes|string|max:255';
            $rules['email'] = 'nullable|email';
            $rules['username'] = 'nullable';
            $rules['current_password'] = 'nullable|string|min:8';
            $rules['password'] = 'nullable|min:8|confirmed|regex:/^(?=.*[A-Z]).+$/';
            $rules['photo'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120';
            $rules['role_id'] = 'nullable';
        }

        return $rules;
    }


    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
            'password.regex' => 'Password setidaknya memiliki 1 huruf besar.'
        ];
    }
}
