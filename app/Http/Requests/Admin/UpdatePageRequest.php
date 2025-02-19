<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
        $id = $this->route('page') ? $this->route('page')->id : $this->id;
        return [
            'title' => ['required', 'max:255', 'unique:pages,title,'.$id.',id,deleted_at,NULL'],
            'content' => ['required', 'string'],
            'meta_title'=>['required', 'string', 'max:255', 'unique:pages,meta_title,'.$id.',id,deleted_at,NULL'],
        ];
    }
}
