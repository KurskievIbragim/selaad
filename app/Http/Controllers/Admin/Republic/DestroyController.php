<?php

namespace App\Http\Controllers\Admin\Republic;

use App\Http\Controllers\Controller;
use App\Models\KnowRepublic;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(KnowRepublic $republic)
    {
        $republic->delete();

        return redirect()->route('admin.republic.index');
    }
}
