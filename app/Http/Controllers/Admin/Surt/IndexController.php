<?php

namespace App\Http\Controllers\Admin\Surt;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Surt;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Surt $surt)
    {
        $surtash = Surt::latest()->paginate(10);
        return view('admin.surt.index', compact('surtash'));
    }
}
