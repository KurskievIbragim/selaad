<?php

namespace App\Http\Controllers\Admin\Kica;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Kica\UpdateRequest;
use App\Models\Category;
use App\Models\Kica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Kica $kica)
    {
        $data = $request->validated();
        if (isset($data['image_main'])) {
            $data['image_main'] = Storage::put('images', $data['image_main']);
            $data['image_main'] = str_replace('images/', '', $data['image_main']);
        }

        $kica->update($data);

        return redirect()->route('admin.kica.index', compact('kica'));
    }
}
