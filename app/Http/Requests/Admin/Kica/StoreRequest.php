<?php

namespace App\Http\Requests\Admin\Kica;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required | string|max:255',
            'image_main' => 'nullable',
            'category_id' => 'nullable',
            'user_id' => '',
            'published_at' => 'required|date_format:Y-m-d\TH:i',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Проверьте правильность ввода',
            'image_main.required' => 'Это поле необходимо выбрать',
            'image_main.file' => 'Необходимо выбрать изображение ',

        ];
    }
}
