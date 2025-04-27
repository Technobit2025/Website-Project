<?php

/**
 * File ini dibuat secara otomatis oleh perintah MakeFormRequest / make:form-req.
 * Kamu dapat memodifikasi file ini.
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayrollRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|max:255',
            'employee_id' => 'integer|required|exists:employees,id',
            'start_date' => 'required',
            'end_date' => 'required',
            'total' => 'integer',
            'status' => 'in:unpaid,paid',
            'description' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'name harus berupa string.',
            'name.max' => 'name tidak boleh lebih dari 255 karakter.',
            'employee_id.integer' => 'employee_id harus berupa integer.',
            'employee_id.required' => 'employee_id harus diisi.',
            'employee_id.exists' => 'Pilihan employee_id tidak valid.',
            'start_date.required' => 'start_date harus diisi.',
            'end_date.required' => 'end_date harus diisi.',
            'total.integer' => 'total harus berupa integer.',
            'status.in' => 'Pilihan status tidak valid.',
            'description.string' => 'description harus berupa string.',
        ];
    }
}