<?php

namespace App\Http\Controllers\Admin\FamousPeople;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FamousPeople;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(FamousPeople $famousPeople)
    {
        $famousPeople->delete();

        return redirect()->route('admin.famous.index');
    }
}
