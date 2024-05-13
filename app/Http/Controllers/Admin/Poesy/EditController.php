<?php

namespace App\Http\Controllers\Admin\Poesy;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Poesy;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Poesy $poesy)

    {

        $categories = Category::all();
        $users = User::query()->where('role', 3)->get();
        $authors = Author::all();

        return view('admin.poesy.edit', compact('poesy', 'categories', 'authors', 'users'));
    }
}
