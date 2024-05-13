<?php


namespace App\Service;


use App\Models\Poesy;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class PoesyService
{
    public function save(FormRequest $request, Poesy $poesy) {
        $poesy->save();
        return $poesy;
    }




}
