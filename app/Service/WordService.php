<?php


namespace App\Service;


use App\Models\Word;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class WordService
{
    public function save(FormRequest $request, Word $word) {
        $word->fill($request->validated());
        $word->save();
        return $word;
    }




}
