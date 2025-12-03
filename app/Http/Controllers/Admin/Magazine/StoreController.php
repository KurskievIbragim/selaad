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
            // Сохраняем в storage/app/previews
            $data['preview'] = $file->store('previews');
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // Сохраняем в storage/app/magazines
            $data['file'] = $file->store('magazines');
        }

        Magazine::firstOrCreate($data);

        return redirect()->route('admin.magazine.index');
    }
}