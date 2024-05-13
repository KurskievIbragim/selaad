<?php

namespace App\Http\Controllers\Admin\Surt;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Models\Surt;
use App\Service\SurtService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(SurtService $service)
    {
        $this->service = $service;
    }




}
