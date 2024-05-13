<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Video $video)
    {
        return view('admin.videos.show', compact('video'));
    }
}
