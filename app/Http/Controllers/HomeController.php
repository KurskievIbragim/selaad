<?php

namespace App\Http\Controllers;


use App\Models\FamousPeople;
use App\Models\Kica;
use App\Models\KnowRepublic;
use App\Models\Magazine;
use App\Models\Poesy;
use App\Models\Post;
use App\Models\Surt;
use App\Models\Video;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index() {


        $kicash = Kica::query()->latest()->take(6)->get();
        $words = Word::query()->where('display', 1)->latest()->paginate(5);

        // Main tails
        $firstPost = Post::orderBy('published_at', 'desc')->first();
        $secondPost = Post::orderBy('published_at', 'desc')->skip(1)->first();
        $thirdPost = Post::orderBy('published_at', 'desc')->skip(2)->first();
        $fourPost = Post::orderBy('published_at', 'desc')->skip(3)->first();




        $knowRepublic = KnowRepublic::query()->latest()->take(4)->get();



        $poesy = Poesy::query()->orderBy('published_at', 'desc')->take(5)->get();
        $videos = Video::query()->latest()->take(3)->get();
        $famousPeople = FamousPeople::query()->latest()->take(5)->get();

        $photos = Surt::query()->latest()->take(1)->get();


        return view('home', compact('kicash', 'knowRepublic', 'firstPost', 'secondPost', 'thirdPost', 'fourPost', 'poesy', 'videos', 'famousPeople','words', 'photos'));
    }

    public function kicash() {


        $words = Word::query()->where('display', 1)->latest()->paginate(5);
        $kicash = Kica::latest()->paginate(16);


        return view('kicash', compact('kicash', 'words'));
    }

    public function poesy() {


        $words = Word::query()->where('display', 1)->latest()->paginate(5);
        $kicash = Kica::query()->take(6)->orderBy('id', 'desc')->get();
        $poesys = Poesy::query()->orderBy('id', 'desc')->paginate(12);



        return view('poesy', compact('poesys', 'kicash', 'words'));
    }

    public function tails() {


        $words = Word::query()->where('display', 1)->latest()->paginate(5);
        $kicash = Kica::query()->take(6)->orderBy('id', 'desc')->get();

        $tails = Post::query()
            ->where('category_id', 5)
            ->orderBy('id', 'desc')
            ->paginate(6);

        return view('tails', compact('tails', 'kicash', 'words'));

    }

    public function persons() {


        $words = Word::query()->where('display', 1)->latest()->paginate(5);
        $kicash = Kica::query()->take(6)->orderBy('id', 'desc')->get();

        $persons = FamousPeople::orderBy('id', 'desc')->paginate(20);


        return view('persons', compact('persons', 'kicash', 'words'));

    }

    public function dictionary(Request $request)
    {
        $kicash = Kica::query()->take(6)->orderBy('id', 'desc')->get();

        $alreadyDisplayedWords = session()->get('already_displayed_words', []);

        $words = Word::latest()->paginate(6);

        if ($request->ajax()) {
            $view = count($words) > 0 ? view('load', compact('words'))->render() : '';
            $wordsArray = count($words) > 0 ? $words->items() : [];

            $newlyDisplayedWordIds = $words->pluck('id')->toArray();
            $alreadyDisplayedWords = array_merge($alreadyDisplayedWords, $newlyDisplayedWordIds);
            session()->put('already_displayed_words', $alreadyDisplayedWords);

            return response()->json(['view' => $view, 'words' => $wordsArray, 'nextPageUrl' => $words->nextPageUrl()]);
        }

        return view('dictionary', compact('words', 'kicash'));
    }

    public function videos()
    {

        $videos =Video::orderBy('id', 'desc')->paginate(9);
        $kicash = Kica::query()->take(6)->orderBy('id', 'desc')->get();
        $words = Word::query()->where('display', 1)->latest()->paginate(5);


        return view('videos', compact('words', 'kicash', 'videos'));

    }

    public function magazines()
    {

        $kicash = Kica::query()->latest()->take(6)->get();
        $words = Word::query()->where('display', 1)->latest()->paginate(5);

        $magazines = Magazine::orderBy('id', 'desc')->paginate(12);

        return view('magazines', compact('kicash', 'words', 'magazines'));
    }

    public function surtash()
    {


        

        $kicash = Kica::query()->latest()->take(6)->get();
        $words = Word::query()->where('display', 1)->latest()->paginate(5);
        $photos = Surt::paginate(10);

        return view('surtash', compact('photos', 'words', 'kicash'));

    }

    public function search(Request $request)
    {
        $keyword = $request->input('homeSearch');

        $posts = Post::where('title', 'like', "%$keyword%")
            ->orWhere('content', 'like', "%$keyword%")
            ->get();


        $poesyItems = Poesy::where('title', 'like', "%$keyword%")
            ->orWhere('content', 'like', "%$keyword%")
            ->get();

        $kicash = Kica::query()->latest()->take(6)->get();
        $words = Word::query()->where('display', 1)->latest()->paginate(5);

        // Возвращаем результаты поиска в представление
        return view('search-results', compact('posts', 'poesyItems', 'kicash', 'words'));
    }


}
