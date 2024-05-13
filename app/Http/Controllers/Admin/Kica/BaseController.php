<?php

namespace App\Http\Controllers\Admin\Kica;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Service\KicaService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(KicaService $service)
    {
        $this->service = $service;
    }




}
