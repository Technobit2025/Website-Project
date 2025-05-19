<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatrolRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'shift_id'  => 'required|exists:shifts,id',
            'place_id'  => 'required|exists:company_places,id',
            'kondisi'   => 'required|string',
            'catatan'   => 'nullable|string',
        ];
    }
}
