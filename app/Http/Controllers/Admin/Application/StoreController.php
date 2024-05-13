<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Application\StoreRequest;
use App\Models\Category;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $data['user-poesy-file'] = Storage::put('images', $data['user-poesy-file']);
        $data['user-poesy-file'] = str_replace('images/', '', $data['user-poesy-file']);


        dd($data);

        Application::firstOrCreate($data);


        return redirect()->route('home');
    }
}
