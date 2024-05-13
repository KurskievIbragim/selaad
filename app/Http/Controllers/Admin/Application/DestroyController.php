<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Application;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Application $application)
    {
        $application->delete();

        return redirect()->route('admin.application.index');
    }
}
