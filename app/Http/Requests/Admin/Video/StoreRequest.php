<?php

namespace App\Http\Requests\Admin\Video;

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
            'title' => 'required|string|max:255',
            'image_main' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp', // Update this as per the actual file types
            'videos' => 'required|file|mimes:mp4',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'image_main.required' => 'Это поле необходимо выбрать',
            'video.required' => 'Это поле необходимо выбрать',
            'image_main.file' => 'Необходимо выбрать изображение ',
            'video.file' => 'Необходимо выбрать видео ',

        ];
    }
}
