<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);


        if (isset($data['avatar'])) {
            $data['avatar'] = Storage::put('avatars', $data['avatar']);
            $data['avatar'] = str_replace('avatars/', '', $data['avatar']);
        }
        
       User::FirstOrCreate(['email' => $data['email']],$data);
       return redirect()->route('admin.user.index');
    }
}
