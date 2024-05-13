<?php

namespace App\Http\Controllers\Admin\Poesy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Poesy\UpdateRequest;
use App\Models\Category;
use App\Models\Poesy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Poesy $poesy)
    {
        $data = $request->validated();
       if (isset($data['image_main'])) {
           $data['image_main'] = Storage::put('images', $data['image_main']);
           $data['image_main'] = str_replace('images/', '', $data['image_main']);
       }



        $poesy->update($data);


        return redirect()->route('admin.poesy.index', compact('poesy'));
    }
}
