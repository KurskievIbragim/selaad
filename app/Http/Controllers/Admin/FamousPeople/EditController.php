<?php

namespace App\Http\Controllers\Admin\FamousPeople;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\FamousPeople;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(FamousPeople $famousPeople)

    {

        $authors = Author::all();
        $categories = Category::all();
        return view('admin.famous.edit', compact('famousPeople', 'categories', 'authors'));
    }
}
