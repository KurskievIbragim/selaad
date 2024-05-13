<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTranslate;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Post $post)

    {


        $users = User::query()->where('role', 3)->get();
        $authors = Author::all();
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories', 'authors', 'users'));
    }
}
