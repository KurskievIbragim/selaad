<?php


namespace App\Service;


use App\Models\Video;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class VideoService
{
    public function save(FormRequest $request, Video $video) {
        $video->fill($request->validated());
        $data['image_main'] = Storage::put('images', $video['image_main']);
        $data['image_main'] = str_replace('images/', '', $video['image_main']);
        $data['video'] = Storage::put('videos', $video['video']);
        $data['video'] = str_replace('videos/', '', $video['video']);
        $video->save();
        return $video;
    }




}
