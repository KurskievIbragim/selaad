<?php

namespace App\Http\Controllers\Admin\Surt;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Surt;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Surt $surt)
    {
        $surt->delete();

        return redirect()->route('admin.surt.index');
    }
}
