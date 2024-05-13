<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Video\StoreRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image_main')) {
            $imagePath = $request->file('image_main')->store('images');
            $data['image_main'] = str_replace('images/', '', $imagePath);
        }

        if ($request->hasFile('videos')) {
            $videoPath = $request->file('videos')->store('videos');
            $data['videos'] = str_replace('videos/', '', $videoPath);
        }

        Video::create($data);

        return redirect()->route('admin.videos.index');
    }
}
