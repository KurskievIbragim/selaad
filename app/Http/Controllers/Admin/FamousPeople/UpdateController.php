<?php

namespace App\Http\Controllers\Admin\FamousPeople;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FamousPeople\UpdateRequest;
use App\Models\FamousPeople;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, FamousPeople $famousPeople)
    {
        $data = $request->validated();
        $data['image_main'] = Storage::put('images', $data['image_main']);
        $data['image_main'] = str_replace('images/', '', $data['image_main']);

        $famousPeople->update($data);




        return redirect()->route('admin.famous.index', compact('famousPeople'));
    }
}
