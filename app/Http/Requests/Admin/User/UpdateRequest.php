<?php

namespace App\Http\Requests\Admin\User;

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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . $this->user_id,
            'role' => 'required|int',
            'user_id' => 'required|int|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните поле',
            'name.string' => 'Значение должно быть строкой',
            'email.required' => 'Заполните поле',
            'email.string' => 'Значение должно быть строкой',
            'email.email' => 'Неверный формат Email',
            'email.unique' => 'Пользователь с таким Email уже существует',
            'role.required' => 'Укажите роль пользователя',
            'role.int' => 'Роль пользователя должна быть числом',
        ];
    }
}
