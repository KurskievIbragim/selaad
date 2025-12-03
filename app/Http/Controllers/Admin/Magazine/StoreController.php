<?php

namespace App\Http\Controllers\Admin\Magazine;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Magazine\StoreRequest;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('preview')) {
            $data['preview'] = Storage::put('previews', $data['preview']);
            $data['preview'] = str_replace('previews/', '', $data['preview']);
        }

        if ($request->hasFile('file')) {
            $data['file'] = Storage::put('magazines', $data['file']);
            $data['file'] = str_replace('magazines/', '', $data['file']);
        }

        Magazine::firstOrCreate($data);

        return redirect()->route('admin.magazine.index');
    }
}