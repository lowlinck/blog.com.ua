<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title'=> 'required|string',
            'content'=> 'required|string',
            'main_image' => '',
            'preview_image'=>'',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids.*' => 'nullable|required|integer|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'content.required'=>'Это поле необходимо для заполнения',
            'content.string'=>'Данные должны соответствовать строчному типу',
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'preview_image.required'=>'Это поле необходимо для заполнения',
            'preview_image.file'=>'Необходимо выбрать файл',
            'main_image.required'=>'Это поле необходимо для заполнения',
            'main_image.file'=>'Необходимо выбрать файл',
            'category_id.integer'=>'ID категории должен быть числом',
            'category_id.required'=>'Это поле необходимо для заполнения',
            'category_id.exists'=>'ID категории должен біть числом',
            'tag_ids.array'=>'Необходимо отправить массив данных',

        ];
    }
}
