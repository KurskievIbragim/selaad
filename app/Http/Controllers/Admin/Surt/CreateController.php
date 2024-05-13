<?php

namespace App\Http\Controllers\Admin\Surt;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Surt;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Surt $surt, Category $categories)
    {

        $categories = Category::all();
        $users = User::query()->where('role', 3)->get();


        return view('admin.surt.create', compact( 'categories',  'users'));
    }
}
