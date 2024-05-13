<?php

namespace App\Http\Controllers\Admin\Poesy;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Poesy;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Poesy $poesy)
    {
        $poesy = Poesy::latest()->paginate(12);
        $users = User::query()->where('role', 3)->get();
        $authors = Author::all();
        return view('admin.poesy.index', compact('poesy', 'users', 'authors'));
    }
}
