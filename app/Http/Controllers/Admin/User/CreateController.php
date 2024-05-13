<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Locality;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(User $user)
    {

        $locality = Locality::all();
        $roles = User::getRoles();

        return view('admin.user.create', compact('user', 'roles', 'locality'));
    }
}
