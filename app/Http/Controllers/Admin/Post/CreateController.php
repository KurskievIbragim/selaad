<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Post $post, Category $categories)
    {

        $categories = Category::all();
        $users = User::query()->where('role', 3)->get();
        $authors = Author::all();



        return view('admin.post.create', compact( 'categories',  'users', 'authors'));
    }
}
