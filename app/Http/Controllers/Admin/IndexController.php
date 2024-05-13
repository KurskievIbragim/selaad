<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {


        $users = User::query()->where('role', 0);
        $post = Post::all();
        $application = Application::all();
        $postCount = $post->count();
        return view('admin.index', compact('postCount', 'users', 'application'));
    }
}
