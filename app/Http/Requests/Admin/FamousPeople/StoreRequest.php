<?php

namespace App\Http\Requests\Admin\FamousPeople;

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
            'lead' => 'required|max:5000',
            'bio' => 'required|max:5000',
            'image_main' => 'required|file',
            'category_id' => 'nullable',
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
