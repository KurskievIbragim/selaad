<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Locality;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        $locality = Locality::all();
        return view('auth.register', compact('locality'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'locality' => ['nullable'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'school' => ['nullable'],
            'class' => ['nullable'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'locality' => $request->locality,
            'avatar' => $request->avatar,
            'school' => $request->school,
            'class' => $request->class,
            'password' => Hash::make($request->password),
        ];


        if ($request->hasFile('avatar')) {
            $data['avatar'] = Storage::put('avatars', $data['avatar']);
            $data['avatar'] = str_replace('avatars/', '', $data['avatar']);
        }


        $user = User::create($data);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
