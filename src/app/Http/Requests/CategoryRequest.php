<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_name' => ['required', 'string', 'max:10', 'unique:categories'],
        ];
    }

    public function messages()
    {
        return [
            'category_name.required' => 'カテゴリを入力してください',
            'category_name.string' => 'カテゴリを文字列で入力してください',
            'category_name.max' => 'カテゴリを10文字以下で入力してください',
            'category_name.unique' => 'カテゴリが既に存在しています',
        ];
    }
}
