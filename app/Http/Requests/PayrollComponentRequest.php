<?php

/**
 * File ini dibuat secara otomatis oleh perintah MakeFormRequest / make:form-req.
 * Kamu dapat memodifikasi file ini.
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayrollComponentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|max:255|required',
            'payroll_id' => 'integer|required|exists:payrolls,id',
            'type' => 'in:basic,allowance,deduction,bonus,tax|required',
            'amount' => 'integer|required',
            'description' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'name harus berupa string.',
            'name.max' => 'name tidak boleh lebih dari 255 karakter.',
            'name.required' => 'name harus diisi.',
            'payroll_id.integer' => 'payroll_id harus berupa integer.',
            'payroll_id.required' => 'payroll_id harus diisi.',
            'payroll_id.exists' => 'Pilihan payroll_id tidak valid.',
            'type.in' => 'Pilihan type tidak valid.',
            'type.required' => 'type harus diisi.',
            'amount.integer' => 'amount harus berupa integer.',
            'amount.required' => 'amount harus diisi.',
            'description.string' => 'description harus berupa string.',
        ];
    }
}