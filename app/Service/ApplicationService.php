<?php


namespace App\Service;


use App\Models\Application;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class ApplicationService
{
    public function save(FormRequest $request, Application $application) {
        $application->fill($request->validated());
        $data['user-poesy-file'] = Storage::put('images', $application['user-poesy-file']);
        $data['image_main'] = str_replace('images/', '', $application['user-poesy-file']);
        $application->save();
        return $application;
    }




}
