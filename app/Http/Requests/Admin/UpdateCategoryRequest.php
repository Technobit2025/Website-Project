<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
        $id = $this->route('admin.category.update') ? $this->route('admin.category.update')->category->id : $this->category->id;
        return [
            'name'  => ['max:255','unique:categories,name,'.$id.',id,deleted_at,NULL'],
            'description' => ['nullable','string'],
            'parent_id' => ['nullable','exists:categories,id,deleted_at,NULL'],
            'meta_title' => ['required', 'string', 'max:255', 'unique:categories,meta_title,'.$id.',id,deleted_at,NULL']

        ];
    }
}
