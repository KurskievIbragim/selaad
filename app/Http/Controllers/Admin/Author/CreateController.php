<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\StoreRequest;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Author $author, Category $categories)
    {

        $categories = Category::all();
        $authors = Author::all();



        return view('admin.authors.create', compact('author', 'categories', 'authors'));
    }
}
