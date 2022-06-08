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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|int',
            'tags' => 'array',
            'tags.*' => 'int',
            'image' => 'file',
            'preview_image' => 'file',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле должно быть заполнено',
            'title.string' => 'Значение поля должно быть строкой',
            'content.required' => 'Поле должно быть заполнено',
            'content.string' => 'Значение поля должно быть строкой',
            'category_id.required' => 'Поле должно быть заполнено',
            'category_id.int' => 'Значение должно быть числом',
            'tags.array' => 'Ожидается массив',
            'image.file' => 'Должен быть загружен файл',
            'preview_image.file' => 'Должен быть загружен файл',
        ];
    }
}
