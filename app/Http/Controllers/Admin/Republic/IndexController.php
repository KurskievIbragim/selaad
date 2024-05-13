<?php

namespace App\Http\Controllers\Admin\Republic;

use App\Http\Controllers\Controller;
use App\Models\KnowRepublic;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(KnowRepublic $republic)
    {
        $republics = KnowRepublic::latest()->paginate(10);
        return view('admin.republic.index', compact('republics'));
    }
}
