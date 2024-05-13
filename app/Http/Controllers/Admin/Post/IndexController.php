<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Post $post)
    {

        $users = User::query()->where('role', 3)->get();
        $authors = Author::all();
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index', compact('posts', 'users', 'authors'));
    }
}
