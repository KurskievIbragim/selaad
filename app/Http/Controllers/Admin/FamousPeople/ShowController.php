<?php

namespace App\Http\Controllers\Admin\FamousPeople;

use App\Http\Controllers\Controller;
use App\Models\FamousPeople;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(FamousPeople $famousPeople)
    {
        return view('admin.famous.show', compact('famousPeople'));
    }
}
