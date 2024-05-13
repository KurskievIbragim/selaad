<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Category $categories)
    {
        $categories = Category::paginate(20);
        return view('admin.categories.index', compact('categories'));
    }
}
