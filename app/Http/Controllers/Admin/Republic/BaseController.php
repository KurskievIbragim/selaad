<?php

namespace App\Http\Controllers\Admin\Republic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Republic\StoreRequest;
use App\Models\KnowRepublic;
use App\Service\RepublicService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(RepublicService $service)
    {
        $this->service = $service;
    }




}
