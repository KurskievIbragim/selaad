<?php

namespace App\Http\Requests\Admin\Magazine;

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
            'number' => 'required|string',
            'year' => 'required|date',
            'preview' => 'required|image|mimes:jpg,jpeg,webp,png',
            'file' => 'nullable|file|mimes:pdf', // Update this as per the actual file types
        ];
    }

}