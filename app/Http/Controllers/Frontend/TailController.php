<?php

namespace App\Http\Controllers\Frontend;



use App\Http\Controllers\Controller;
use App\Models\Kica;
use App\Models\Post;
use App\Models\Word;
use Illuminate\Http\Request;

class TailController extends Controller
{
    public function index(Request $request)
    {
        $words = Word::query()->where('display', 1)->latest()->paginate(5);
        $kicash = Kica::query()->take(6)->orderBy('id', 'desc')->get();

        $tails = Post::query()
            ->where('category_id', 5)
            ->orderBy('id', 'desc')
            ->paginate(6);

        if ($request->ajax()) {
            $view = view('data', compact('tails'))->render();

            return response()->json(['html' => $view]);
        }

        return view('tails', compact('tails', 'kicash', 'words'));

    }

    public function story()
    {
        $words = Word::query()->where('display', 1)->latest()->paginate(5);
        $kicash = Kica::query()->take(6)->orderBy('id', 'desc')->get();

        $tails = Post::query()
            ->where('category_id', 1)
            ->orderBy('id', 'desc')
            ->paginate(6);


        return view('story', compact('tails', 'kicash', 'words'));
    }

    public function tailSingle(Post $post) {

        $words = Word::query()->where('display', 1)->latest()->paginate(5);
        $kicash = Kica::query()->take(5)->orderBy('id', 'desc')->get();
        $tails = Post::all();


        return view('tail-single', compact('tails', 'kicash', 'post', 'words'));
    }

}
