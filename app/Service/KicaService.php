<?php


namespace App\Service;


use App\Models\Kica;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class KicaService
{
    public function save(FormRequest $request, Kica $kica) {
        $kica->fill($request->validated());
        $data['image_main'] = Storage::put('images', $kica['image_main']);
        $data['image_main'] = str_replace('images/', '', $kica['image_main']);
        $kica->save();
        return $kica;
    }




}
