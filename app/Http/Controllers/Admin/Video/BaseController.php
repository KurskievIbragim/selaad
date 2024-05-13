<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Video\StoreRequest;
use App\Models\Video;
use App\Service\VideoService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(VideoService $service)
    {
        $this->service = $service;
    }




}
