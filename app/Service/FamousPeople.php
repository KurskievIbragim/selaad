<?php


namespace App\Service;


use App\Models\FamousPeople;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class FamousPeopleService
{
    public function save(FormRequest $request, FamousPeople $famousPeople) {
        $famousPeople->fill($request->validated());
        $data['image_main'] = Storage::put('images', $famousPeople['image_main']);
        $data['image_main'] = str_replace('images/', '', $famousPeople['image_main']);
        $famousPeople->save();
        return $famousPeople;
    }
}
