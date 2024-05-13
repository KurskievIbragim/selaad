<?php

namespace App\Http\Controllers\Admin\Kica;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Kica;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Kica $kica)

    {

        $authors = User::query()->where('role', 3)->get();
        $categories = Category::all();
        return view('admin.kica.edit', compact('kica', 'categories', 'authors'));
    }
}
