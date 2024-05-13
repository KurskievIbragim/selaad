<?php


namespace App\Service;


use App\Models\Surt;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class SurtService
{
    public function save(FormRequest $request, Surt $surt) {
        $surt->fill($request->validated());
        $data['surtFile'] = Storage::put('surtash', $surt['surtFile']);
        $data['surtFile'] = str_replace('surtash/', '', $surt['surtFile']);
        $surt->save();
        return $surt;
    }




}
