<?php

namespace App\Http\Controllers\Admin\Magazine;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Magazine\UpdateRequest;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Magazine $magazine)
    {
        $data = $request->validated();

        $data['file'] = Storage::put('magazines/', $data['file']);

        $data['file'] = str_replace('magazines/', '', $data['file']);

        $data['preview'] = Storage::put('previews', $data['preview']);
        $data['preview'] = str_replace('previews/', '', $data['preview']);

        $magazine->update($data);




        return redirect()->route('admin.post.index', compact('video'));
    }
}
