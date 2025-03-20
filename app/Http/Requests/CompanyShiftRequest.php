<?php

/**
 * File ini dibuat secara otomatis oleh perintah MakeFormRequest / make:form-req.
 * Kamu dapat memodifikasi file ini.
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyShiftRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'company_id' => 'integer|required|exists:companies,id',
            'name' => 'string|max:255|required',
            'start_time' => 'required',
            'end_time' => 'required',
            'color' => 'required|string',
            'description' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'company_id.integer' => 'company_id harus berupa integer.',
            'company_id.required' => 'company_id harus diisi.',
            'company_id.exists' => 'Pilihan company_id tidak valid.',
            'name.string' => 'name harus berupa string.',
            'name.max' => 'name tidak boleh lebih dari 255 karakter.',
            'name.required' => 'name harus diisi.',
            'start_time.required' => 'start_time harus diisi.',
            'end_time.required' => 'end_time harus diisi.',
            'color.required' => 'warna harus diisi.',
            'color.string' => 'warna harus berupa string.',
            'description.string' => 'description harus berupa string.',
        ];
    }
}
