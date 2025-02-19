<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
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
        return [
            'title'  => ['required', 'string', 'max:255', 'unique:blogs,title,NULL,id,deleted_at,NULL'],
            'description' => ['nullable', 'min:10'],
            'content' => ['required'],
            'thumbnail' => ['required'],
            'categories*' => ['nullable','required', 'exists:categories,id,deleted_at,NULL'],
            'tags*' => ['nullable','exists:tags,id,deleted_at,NULL'],
            'meta_title' => ['required', 'string', 'unique:blogs,meta_title,NULL,id'],
            'status' => ['nullable','required','min:0','max:1'],
            'meta_description' => ['string']
        ];
    }

    public function messages()
    {
        return [
            'categories.required' => 'The categories field is required'
        ];
    }
}
