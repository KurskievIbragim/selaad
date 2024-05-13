<?php

namespace App\Http\Controllers\Admin\Kica;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Kica\StoreRequest;
use App\Models\Category;
use App\Models\Kica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        if (isset($data['image_main'])) {
            $data['image_main'] = Storage::put('images', $data['image_main']);
            $data['image_main'] = str_replace('images/', '', $data['image_main']);
        }


        Kica::firstOrCreate($data);


       return redirect()->route('admin.kica.index');
    }
}
