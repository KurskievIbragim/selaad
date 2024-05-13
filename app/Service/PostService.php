<?php


namespace App\Service;


use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function save(FormRequest $request, Post $post) {
        $post->fill($request->validated());
        $data['image_main'] = Storage::put('images', $post['image_main']);
        $data['image_main'] = str_replace('images/', '', $post['image_main']);
        $post->save();
        return $post;
    }




}
