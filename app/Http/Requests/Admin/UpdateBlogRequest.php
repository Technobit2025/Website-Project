<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
        $id = $this->route('blog') ? $this->route('blog')->id : $this->id;

        return [
           'title'  => ['nullable', 'max:255', 'unique:blogs,title,'.$id.',id,deleted_at,NULL'],
           'thumbnail' => ['sometimes','required'],
           'meta_title'  => ['nullable', 'max:255', 'unique:blogs,meta_title,'.$id.',id,deleted_at,NULL'],
            'status' => ['min:0','max:1'],
        ];
    }
}
