<?php

namespace App\Http\Requests\Admin\Poesy;

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
            'lead' => 'required | string|max:255',
            'content' => 'required',
            'published_at' => 'nullable|date_format:Y-m-d\TH:i',
            'category_id' => 'nullable',
            'author_id' => 'nullable',
            'user_id' => 'nullable',
        ];
    }
}
