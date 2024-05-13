<?php

namespace App\Http\Controllers\Admin\Poesy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Poesy;

use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Poesy $poesy, Category $categories)
    {

        $categories = Category::all();
        $users = User::query()->where('role', 3)->get();
        $authors = Author::all();


        return view('admin.poesy.create', compact('poesy', 'categories', 'authors', 'users'));
    }
}
