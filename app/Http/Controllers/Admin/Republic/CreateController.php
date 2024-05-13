<?php

namespace App\Http\Controllers\Admin\Republic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Republic\StoreRequest;
use App\Models\KnowRepublic;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(KnowRepublic $republic)
    {

        return view('admin.republic.create', compact( 'republic',));
    }
}
