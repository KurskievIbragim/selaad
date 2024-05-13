<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Application;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Application $application)
    {
        $application = Application::latest()->paginate(10);
        return view('admin.application.index', compact('application'));
    }
}
