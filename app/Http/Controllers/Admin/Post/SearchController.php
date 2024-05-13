<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Kica;
use App\Models\Poesy;
use App\Models\Post;
use App\Models\Word;
use Illuminate\Http\Request;

class SearchController extends BaseController
{
    public function __invoke(Request $request)
    {

        $keyword = $request->input('adminPostSearch');

        $posts = Post::where('title', 'like', "%$keyword%")
            ->orWhere('content', 'like', "%$keyword%")
            ->get();

        return view('admin.post.search', compact('posts'));
    }
}
