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
            'preview' => 'nullable|image|mimes:jpg,jpeg,webp,png',
            'file' => 'nullable|file|mimes:pdf',
            'published_at' => 'required|date_format:Y-m-d\TH:i',
        ];
    }

}
