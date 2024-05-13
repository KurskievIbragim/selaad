<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\StoreRequest;
use App\Service\AuthorService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(AuthorService $service)
    {
        $this->service = $service;
    }




}
