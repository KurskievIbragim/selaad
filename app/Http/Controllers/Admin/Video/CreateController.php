<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Video\StoreRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Video $video, Category $categories)
    {

        $categories = Category::all();
        $videos = Video::all();



        return view('admin.videos.create', compact( 'categories', 'videos'));
    }
}
