<?php

namespace App\Http\Controllers\Admin\Magazine;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Magazine $magazine)
    {
        $magazines = Magazine::latest()->paginate(10);
        return view('admin.magazine.index', compact('magazines'));
    }
}
