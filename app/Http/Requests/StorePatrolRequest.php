<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatrolRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'photo_base64' => 'required|string', // Pastikan base64 ada
            'filename'      => 'required|string', // Pastikan nama file ada
            'shift_id'      => 'required|integer',
            'place_id'      => 'required|integer',
            'catatan'       => 'nullable|string',
            'latitude'     => 'required|string',  
            'longitude'    => 'required|string',  
        ];
    }
    public function messages()
    {
        return [
            'photo_base64.required' => 'Foto tidak boleh kosong.',
            'filename.required'     => 'Nama file tidak boleh kosong.',
        ];
    }
}
