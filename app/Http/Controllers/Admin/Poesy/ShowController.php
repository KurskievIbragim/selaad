<?php

namespace App\Http\Controllers\Admin\Poesy;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Poesy;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Poesy $poesy)
    {
        return view('admin.post.show', compact('poesy'));
    }
}
