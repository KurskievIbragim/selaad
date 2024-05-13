<?php


namespace App\Service;


use App\Models\Magazine;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class MagazineService
{
    public function save(FormRequest $request, Magazine $magazine) {
        $magazine->fill($request->validated());

        $data['file'] = Storage::put('magazines', $magazine['file']);
        $data['file'] = str_replace('magazines/', '', $magazine['file']);
        $data['preview'] = Storage::put('previews', $magazine['preview']);
        $data['preview'] = str_replace('previews/', '', $magazine['preview']);
        $magazine->save();
        return $magazine;
    }




}
