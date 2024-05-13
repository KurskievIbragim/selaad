<?php

namespace App\Http\Controllers\Admin\Kica;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Kica;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Kica $kica)
    {
        return view('admin.kica.show', compact('kica'));
    }
}
