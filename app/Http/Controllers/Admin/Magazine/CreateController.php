<?php

namespace App\Http\Controllers\Admin\Magazine;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Magazine\StoreRequest;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Magazine $magazine)
    {

        $magazines = Magazine::all();



        return view('admin.magazine.create', compact( 'magazines'));
    }
}
