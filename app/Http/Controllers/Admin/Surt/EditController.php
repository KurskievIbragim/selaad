<?php

namespace App\Http\Controllers\Admin\Surt;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Surt;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Surt $surt)

    {


        $users = User::query()->where('role', 3)->get();

        return view('admin.surt.edit', compact('surt', 'users'));
    }
}
