<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Application\StoreRequest;
use App\Models\Category;
use App\Service\ApplicationService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(ApplicationService $service)
    {
        $this->service = $service;
    }




}
