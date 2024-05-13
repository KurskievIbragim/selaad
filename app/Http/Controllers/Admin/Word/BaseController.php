<?php

namespace App\Http\Controllers\Admin\Word;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Word\StoreRequest;
use App\Service\WordService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(WordService $service)
    {
        $this->service = $service;
    }




}
