<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Author $author)
    {
        $authors = Author::latest()->paginate(10);
        return view('admin.authors.index', compact('authors'));
    }
}
