<?php

namespace App\Http\Requests\Admin\Word;

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
            'word_ing' => 'required | string|max:255',
            'word_translate' => 'required | string|max:255',
            'display' => 'required|integer',
            'published_at' => 'required|date_format:Y-m-d\TH:i',
        ];
    }

    public function messages()
    {
        return [
            'word_ing.required' => 'Это поле необходимо для заполнения',
            'word_translate.required' => 'Это поле необходимо для заполнения',
            'word_ing.string' => 'Проверьте правильность ввода',
            'word_translate.string' => 'Проверьте правильность ввода',


        ];
    }
}
