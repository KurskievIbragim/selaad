<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Video\UpdateRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Video $video)
    {
        $data = $request->validated();

        $data['video'] = Storage::put('videos/', $data['video']);

        $data['video'] = str_replace('videos/', '', $data['video']);

        $data['image_main'] = Storage::put('images', $data['image_main']);
        $data['image_main'] = str_replace('images/', '', $data['image_main']);

        $video->update($data);




        return redirect()->route('admin.post.index', compact('video'));
    }
}
