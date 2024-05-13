<?php

namespace App\Http\Controllers\Admin\Magazine;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Magazine $magazine)
    {
        $magazine->delete();

        return redirect()->route('admin.magazine.index');
    }
}
