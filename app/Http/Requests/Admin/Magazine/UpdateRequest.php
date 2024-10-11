<?php

namespace App\Http\Requests\Admin\Video;
namespace App\Http\Requests\Admin\Video;

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
            'title' => 'required | string|max:255',
            'image_main' => 'nullable',
            'videos' => 'required|file|mimetypes:videos/mp4',
            'published_at' => 'required|date_format:Y-m-d\TH:i',
        ];
    }
}
