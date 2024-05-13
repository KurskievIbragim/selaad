<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\UpdateRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Author $author)
    {
        $data = $request->validated();

        if (isset($data['avatar'])) {
            $data['avatar'] = Storage::put('images/avatars', $data['avatar']);
            $data['avatar'] = str_replace('images/', '', $data['avatar']);
        }

        $author->update($data);




        return redirect()->route('admin.authors.index', compact('author'));
    }
}
