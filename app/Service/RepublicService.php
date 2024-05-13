<?php


namespace App\Service;


use App\Models\KnowRepublic;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class RepublicService
{
    public function save(FormRequest $request, KnowRepublic $republic) {
        $republic->fill($request->validated());
        $data['image_main'] = Storage::put('images', $republic['image_main']);
        $data['image_main'] = str_replace('images/', '', $republic['image_main']);
        $republic->save();
        return $republic;
    }




}
