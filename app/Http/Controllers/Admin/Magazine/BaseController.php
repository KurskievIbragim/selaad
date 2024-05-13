<?php

namespace App\Http\Controllers\Admin\Magazine;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Magazine\StoreRequest;
use App\Models\Magazine;
use App\Service\MagazineService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(MagazineService $service)
    {
        $this->service = $service;
    }




}
