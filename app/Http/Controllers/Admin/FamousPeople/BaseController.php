<?php

namespace App\Http\Controllers\Admin\FamousPeople;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FamousPeople\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\FamousPeople;
use App\Service\FamousPeopleService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(FamousPeopleService $service)
    {
        $this->service = $service;
    }




}
