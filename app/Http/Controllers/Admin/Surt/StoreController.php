<?php

namespace App\Http\Controllers\Admin\Surt;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Surt\StoreRequest;
use App\Models\Category;
use App\Models\Surt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        if (isset($data['surtFile'])) {
            $data['surtFile'] = Storage::put('surtash', $data['surtFile']);
            $data['surtFile'] = str_replace('surtash/', '', $data['surtFile']);
        }
        

        Surt::firstOrCreate($data);


       return redirect()->route('admin.surt.index');
    }
}
