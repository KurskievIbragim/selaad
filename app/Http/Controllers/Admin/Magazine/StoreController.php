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
            $file = $request->file('preview');
            $data['preview'] = $file->store('previews', 'public');
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $data['file'] = $file->store('magazines', 'public');
        }

        Magazine::firstOrCreate($data);

        return redirect()->route('admin.magazine.index');
    }
}