<?php

namespace App\Http\Controllers\Admin\Republic;

use App\Http\Controllers\Controller;
use App\Models\KnowRepublic;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(KnowRepublic $republic)
    {
        return view('admin.republic.show', compact('republic'));
    }
}
