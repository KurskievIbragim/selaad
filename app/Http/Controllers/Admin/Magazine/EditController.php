<?php

namespace App\Http\Controllers\Admin\Magazine;

use App\Http\Controllers\Controller;
use App\Models\Magazine;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Magazine $magazine)

    {

        $magazines = Magazine::all();
        return view('admin.magazine.edit', compact('magazine', 'magazines'));
    }
}
