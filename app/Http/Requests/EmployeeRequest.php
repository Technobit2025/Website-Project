<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'fullname' => 'required|string|max:255',
            'nickname' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:20',
            'emergency_contact' => 'nullable|string|max:255',
            'emergency_phone' => 'nullable|string|max:20',

            // data pribadi
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'birth_place' => 'nullable|string|max:255',
            'marital_status' => 'nullable|string|max:50',
            'nationality' => 'nullable|string|max:100',
            'religion' => 'nullable|string|max:50',
            'blood_type' => 'nullable|string|max:5',
            'id_number' => 'required|string|max:50|unique:employees,id_number',
            'tax_number' => 'nullable|string|max:50',
            'social_security_number' => 'nullable|string|max:50',
            'health_insurance_number' => 'nullable|string|max:50',

            // alamat
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:100',
            'province' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:10',

            // pekerjaan
            'department' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'employment_status' => 'required|in:permanent,contract,internship,freelance',
            'hire_date' => 'required|date',
            'contract_end_date' => 'nullable|date|after_or_equal:hire_date',
            'salary' => 'nullable|numeric|min:0',
            'bank_name' => 'nullable|string|max:255',
            'bank_account_number' => 'nullable|string|max:50',

            // absen
            'active' => 'boolean',
        ];


        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['fullname'] = 'sometimes|string|max:255';
            $rules['id_number'] = 'sometimes|string|max:50|unique:employees,id_number,' . ($this->route('employee')?->id ?? 'NULL') . ',id';
            $rules['hire_date'] = 'sometimes|date';
            $rules['employment_status'] = 'sometimes|in:permanent,contract,internship,freelance';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Nama lengkap wajib diisi.',
            'fullname.string' => 'Nama lengkap harus berupa string.',
            'fullname.max' => 'Nama lengkap tidak boleh lebih dari 255 karakter.',
            'nickname.string' => 'Nama panggilan harus berupa string.',
            'nickname.max' => 'Nama panggilan tidak boleh lebih dari 255 karakter.',
            'phone.string' => 'Nomor telepon harus berupa string.',
            'phone.max' => 'Nomor telepon tidak boleh lebih dari 20 karakter.',
            'emergency_contact.string' => 'Kontak darurat harus berupa string.',
            'emergency_contact.max' => 'Kontak darurat tidak boleh lebih dari 255 karakter.',
            'emergency_phone.string' => 'Nomor telepon darurat harus berupa string.',
            'emergency_phone.max' => 'Nomor telepon darurat tidak boleh lebih dari 20 karakter.',
            'gender.required' => 'Jenis kelamin wajib diisi.',
            'gender.in' => 'Jenis kelamin harus laki-laki atau perempuan.',
            'birth_date.required' => 'Tanggal lahir wajib diisi.',
            'birth_date.date' => 'Tanggal lahir harus berupa tanggal yang valid.',
            'birth_place.string' => 'Tempat lahir harus berupa string.',
            'birth_place.max' => 'Tempat lahir tidak boleh lebih dari 255 karakter.',
            'marital_status.string' => 'Status pernikahan harus berupa string.',
            'marital_status.max' => 'Status pernikahan tidak boleh lebih dari 50 karakter.',
            'nationality.string' => 'Kewarganegaraan harus berupa string.',
            'nationality.max' => 'Kewarganegaraan tidak boleh lebih dari 100 karakter.',
            'religion.string' => 'Agama harus berupa string.',
            'religion.max' => 'Agama tidak boleh lebih dari 50 karakter.',
            'blood_type.string' => 'Golongan darah harus berupa string.',
            'blood_type.max' => 'Golongan darah tidak boleh lebih dari 5 karakter.',
            'id_number.required' => 'Nomor identitas wajib diisi.',
            'id_number.string' => 'Nomor identitas harus berupa string.',
            'id_number.max' => 'Nomor identitas tidak boleh lebih dari 50 karakter.',
            'id_number.unique' => 'Nomor identitas sudah terdaftar.',
            'tax_number.string' => 'Nomor pajak harus berupa string.',
            'tax_number.max' => 'Nomor pajak tidak boleh lebih dari 50 karakter.',
            'social_security_number.string' => 'Nomor jaminan sosial harus berupa string.',
            'social_security_number.max' => 'Nomor jaminan sosial tidak boleh lebih dari 50 karakter.',
            'health_insurance_number.string' => 'Nomor asuransi kesehatan harus berupa string.',
            'health_insurance_number.max' => 'Nomor asuransi kesehatan tidak boleh lebih dari 50 karakter.',
            'address.string' => 'Alamat harus berupa string.',
            'city.string' => 'Kota harus berupa string.',
            'city.max' => 'Kota tidak boleh lebih dari 100 karakter.',
            'province.string' => 'Provinsi harus berupa string.',
            'province.max' => 'Provinsi tidak boleh lebih dari 100 karakter.',
            'postal_code.string' => 'Kode pos harus berupa string.',
            'postal_code.max' => 'Kode pos tidak boleh lebih dari 10 karakter.',
            'department.string' => 'Departemen harus berupa string.',
            'department.max' => 'Departemen tidak boleh lebih dari 255 karakter.',
            'position.string' => 'Posisi harus berupa string.',
            'position.max' => 'Posisi tidak boleh lebih dari 255 karakter.',
            'employment_status.required' => 'Status pekerjaan wajib diisi.',
            'employment_status.in' => 'Status pekerjaan harus salah satu dari berikut: tetap, kontrak, magang, freelance.',
            'hire_date.required' => 'Tanggal masuk wajib diisi.',
            'hire_date.date' => 'Tanggal masuk harus berupa tanggal yang valid.',
            'contract_end_date.date' => 'Tanggal akhir kontrak harus berupa tanggal yang valid.',
            'contract_end_date.after_or_equal' => 'Tanggal akhir kontrak harus setelah atau sama dengan tanggal masuk.',
            'salary.numeric' => 'Gaji harus berupa angka.',
            'salary.min' => 'Gaji minimal harus 0.',
            'bank_name.string' => 'Nama bank harus berupa string.',
            'bank_name.max' => 'Nama bank tidak boleh lebih dari 255 karakter.',
            'bank_account_number.string' => 'Nomor rekening bank harus berupa string.',
            'bank_account_number.max' => 'Nomor rekening bank tidak boleh lebih dari 50 karakter.',
            'active.boolean' => 'Status aktif harus berupa true atau false.',
        ];
    }
}