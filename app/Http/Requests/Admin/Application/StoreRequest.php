<?php

namespace App\Http\Requests\Admin\Application;

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'user_id' => 'required',
            'title' => 'required_if:publication_type,1,2|string|max:255',
            'text' => 'required_if:publication_type,1,2|string|max:255',
            'user_tail_file' => ['required', 'image', 'mimes:jpeg,png,jpg,webp'],
        ];
    }
}
