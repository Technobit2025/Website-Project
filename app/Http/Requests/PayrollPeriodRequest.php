<?php

/**
 * File ini dibuat secara otomatis oleh perintah MakeFormRequest / make:form-req.
 * Kamu dapat memodifikasi file ini.
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayrollPeriodRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'is_locked' => 'nullable|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'name harus berupa string.',
            'name.max' => 'name tidak boleh lebih dari 255 karakter.',
            'start_date.required' => 'start_date harus diisi.',
            'end_date.required' => 'tanggal selesai harus diisi.',
            'end_date.after' => 'tanggal selesai harus lebih dari tanggal mulai.',
            'is_locked.integer' => 'is_locked harus berupa integer.',
        ];
    }
}