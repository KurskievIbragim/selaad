<?php

namespace App\Http\Controllers\Admin\Poesy;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Poesy;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Poesy $poesy)
    {
        $poesy->delete();

        return redirect()->route('admin.poesy.index');
    }
}
