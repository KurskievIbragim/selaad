<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\StoreRequest;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {


        $data = $request->validated();

        if (isset($data['avatar'])) {
            $data['avatar'] = Storage::put('images/avatars', $data['avatar']);
            $data['avatar'] = str_replace('images/', '', $data['avatar']);
        }

        Author::firstOrCreate($data);


       return redirect()->route('admin.authors.index');
    }
}
