<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Video $video)
    {
        $video->delete();

        return redirect()->route('admin.videos.index');
    }
}
