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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | string',
            'email' => 'required| string|email|unique:users',
            'role' => 'required',
            'avatar' => 'required|image|mimes:jpg,jpeg,webp,png',
            'locality' => 'nullable',
            'school' => 'nullable',
            'class' => 'nullable',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле должно быть заполнено',
            'name.string' => 'Это поле должно быть строкой',
            'email.required' => 'Это поле должно быть заполнено',
            'email.string' => 'Email должен быть строкой',
            'email.email' => 'Не верный формат почты ',
            'email.unique' => 'Эта почта уже используется'

        ];
    }
}
