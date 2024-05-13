<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Video $video)

    {

        $videos = Video::all();
        $categories = Category::all();
        return view('admin.videos.edit', compact('video', 'categories', 'videos'));
    }
}
