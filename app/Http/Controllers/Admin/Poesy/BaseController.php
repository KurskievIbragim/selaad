<?php

namespace App\Http\Controllers\Admin\Poesy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Service\PoesyService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(PoesyService $service)
    {
        $this->service = $service;
    }




}
