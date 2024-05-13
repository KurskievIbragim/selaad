<?php

namespace App\Http\Controllers\Admin\Magazine;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Magazine $magazine)
    {
        return view('admin.magazine.show', compact('magazine'));
    }
}
