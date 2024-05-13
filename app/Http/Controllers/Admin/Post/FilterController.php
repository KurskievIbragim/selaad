<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class FilterController extends BaseController
{
    public function __invoke(Request $request)
    {
        $authorId = $request->input('author_id');

        $posts = Post::when($authorId !== '', function ($query) use ($authorId) {
            return $query->where('author_id', $authorId);
        })->latest()->paginate(10);

        return view('admin.post.filtered-posts', compact('posts'))->render();
    }
}
