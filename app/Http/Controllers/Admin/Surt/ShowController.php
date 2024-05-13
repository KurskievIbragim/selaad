<?php

namespace App\Http\Controllers\Admin\Surt;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Surt;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Surt $surt)
    {
        return view('admin.surt.show', compact('surt'));
    }
}
