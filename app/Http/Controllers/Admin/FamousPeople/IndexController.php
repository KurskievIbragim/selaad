<?php

namespace App\Http\Controllers\Admin\FamousPeople;

use App\Http\Controllers\Controller;
use App\Models\FamousPeople;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(FamousPeople $famousPeople)
    {
        $famousPeople = FamousPeople::latest()->paginate(10);
        return view('admin.famous.index', compact('famousPeople'));
    }
}
