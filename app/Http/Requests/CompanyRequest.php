<?php

/**
 * File ini dibuat secara otomatis oleh perintah MakeFormRequest / make:form-req.
 * Kamu dapat memodifikasi file ini.
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|required',
            'email' => 'string|max:255|required|unique:companies,email',
            'address' => 'string|max:255',
            'phone' => 'string|max:255',
            'website' => 'string|max:255',
            'logo' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:5024',
            'location' => 'string|max:255',
            'description' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'name harus berupa string.',
            'name.required' => 'name tidak boleh kosong.',
            'name.max' => 'name tidak boleh lebih dari 255 karakter.',
            'email.string' => 'email harus berupa string.',
            'email.max' => 'email tidak boleh lebih dari 255 karakter.',
            'email.required' => 'email harus diisi.',
            'email.unique' => 'email telah digunakan.',
            'address.string' => 'address harus berupa string.',
            'address.max' => 'address tidak boleh lebih dari 255 karakter.',
            'phone.string' => 'phone harus berupa string.',
            'phone.max' => 'phone tidak boleh lebih dari 255 karakter.',
            'website.string' => 'website harus berupa string.',
            'website.max' => 'website tidak boleh lebih dari 255 karakter.',
            'logo.file' => 'logo harus berupa file.',
            'logo.mimes' => 'logo harus berupa jpg, jpeg, png, atau gif.',
            'location.string' => 'location harus berupa string.',
            'location.max' => 'location tidak boleh lebih dari 255 karakter.',
            'description.string' => 'description harus berupa string.',
        ];
    }
}