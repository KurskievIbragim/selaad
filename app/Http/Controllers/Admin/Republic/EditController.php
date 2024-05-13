<?php

namespace App\Http\Controllers\Admin\Republic;

use App\Http\Controllers\Controller;
use App\Models\KnowRepublic;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(KnowRepublic $republic)

    {
        return view('admin.republic.edit', compact('republic'));
    }
}
