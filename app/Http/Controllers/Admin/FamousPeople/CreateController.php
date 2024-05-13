<?php

namespace App\Http\Controllers\Admin\FamousPeople;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FamousPeople\StoreRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\FamousPeople;

use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(FamousPeople $famousPeople, Category $categories)
    {

        $categories = Category::all();
        $authors = Author::all();



        return view('admin.famous.create', compact( 'categories', 'authors'));
    }
}
