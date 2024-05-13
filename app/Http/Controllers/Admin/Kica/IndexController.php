<?php

namespace App\Http\Controllers\Admin\Kica;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Kica;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Kica $kica)
    {
        $kica = Kica::latest()->paginate(10);
        return view('admin.kica.index', compact('kica'));
    }
}
