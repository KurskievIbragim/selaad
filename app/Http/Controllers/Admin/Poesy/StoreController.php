<?php

namespace App\Http\Controllers\Admin\Poesy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Poesy\StoreRequest;
use App\Models\Category;
use App\Models\Poesy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        Poesy::firstOrCreate($data);


       return redirect()->route('admin.poesy.index');
    }
}
