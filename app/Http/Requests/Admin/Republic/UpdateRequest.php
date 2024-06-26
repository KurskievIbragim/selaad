<?php

namespace App\Http\Requests\Admin\Republic;

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
            'type' => 'required | string|max:255',
            'content' => 'required|',
            'image_main' => 'nullable',
            'files' => 'nullable|array',
        ];
    }
}
