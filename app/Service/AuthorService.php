<?php


namespace App\Service;


use App\Models\Author;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class AuthorService
{
    public function save(FormRequest $request, Author $author) {
        $author->fill($request->validated());
        $data['avatar'] = Storage::put('images/avatars', $author['avatar']);
        $data['avatar'] = str_replace('images/', '', $author['avatar']);
        $author->save();
        return $author;
    }




}
