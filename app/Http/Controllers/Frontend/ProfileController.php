<?php

namespace App\Http\Controllers\Frontend;



use App\Http\Controllers\Controller;
use App\Models\Kica;
use App\Models\Poesy;
use App\Models\Post;
use App\Models\Word;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request)
    {

        $posts = Post::query()->where('user_id', Auth::user()->id)->paginate(9);
        $kicash = Kica::query()->where('user_id', Auth::user()->id)->paginate(7);
        $poesyItems = Poesy::query()->where('user_id', Auth::user()->id)->paginate(7);

        return view('dashboard', compact( 'posts', 'kicash', 'poesyItems'));

    }

    public function tailSingle(Post $post) {

        $words = Word::latest()->paginate(5);
        $kicash = Kica::query()->take(5)->orderBy('id', 'desc')->get();
        $tails = Post::all();


        return view('tail-single', compact('tails', 'kicash', 'post', 'words'));
    }

    public function searchProfile(Request $request)
    {
        $query = $request->input('profileSearch');
        $user = User::where('name', 'like', '%' . $query . '%')->first();

        if ($user) {

            $posts = Post::query()->where('user_id', $user)->paginate(9);
            $kicash = Kica::query()->where('user_id', $user->id)->paginate(7);
            $poesyItems = Poesy::query()->where('user_id', Auth::user()->id)->paginate(7);


            return view('dashboard-search', compact('user', 'posts', 'kicash', 'poesyItems'));
        }


        return view('dashboard-search')->with('error', 'Пользователь не найден');
    }

    public function profileSingle(User $user)
    {

        return view('profile-single', compact('user'));
    }

}
