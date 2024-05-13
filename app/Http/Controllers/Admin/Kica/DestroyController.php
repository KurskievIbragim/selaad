<?php

namespace App\Http\Controllers\Admin\Kica;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Kica;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Kica $kica)
    {
        $kica->delete();

        return redirect()->route('admin.kica.index');
    }
}
