<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
        $id = auth()->user()->id;
        return [
            'email' => ['required', 'email', 'unique:users,email,'.$id.',id'],
            'first_name' => ['required', 'string','max:255'],
            'last_name' => ['required', 'string','max:255'],
            'postal_code' => ['numeric'],
            'country_code' => ['numeric'],
            'phone' => ['required', 'numeric', 'digits_between:6,15','unique:users,phone,'.$id.',id'],
            'bio' => ['required','max:255'],
        ];
    }
}
