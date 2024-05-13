<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\FamousPeople;
use App\Models\Kica;
use App\Models\KnowRepublic;
use App\Models\Poesy;
use App\Models\Post;
use App\Models\Surt;
use App\Models\Word;
use Illuminate\Http\Request;

class SearchController extends BaseController
{
    public function __invoke(Request $request)
    {

        $query = $request->input('adminPostSearch');

        $posts = Post::where('title', 'like', '%'.$query.'%')->orWhere('content', 'like', "%$query%")->get();
        $poesyItems = Poesy::where('title', 'like', '%'.$query.'%')->orWhere('content', 'like', "%$query%")->get();
        $republics = KnowRepublic::where('title', 'like', '%'.$query.'%')->get();
        $famousPeoples = FamousPeople::where('title', 'like', '%'.$query.'%')->orWhere('bio', 'like', "%$query%")->get();
        $kicash = Kica::where('title', 'like', '%'.$query.'%')->get();
        $surtash = Surt::where('title', 'like', '%'.$query.'%')->get();
        $words = Word::where('word_ing', 'like', '%'.$query.'%')->orWhere('word_translate', 'like', "%$query%")->get();

        return view('admin.search', compact('posts', 'poesyItems', 'words', 'kicash', 'republics', 'famousPeoples', 'surtash'));
    }
}
