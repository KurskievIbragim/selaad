<?php

namespace App\Http\Controllers;

use App\Models\FamousPeople;
use App\Models\Kica;
use App\Models\KnowRepublic;
use App\Models\Post;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SinglePageController extends Controller
{
    public function republicSingle(KnowRepublic $republic)
    {

        // Разбиваем строку со списком изображений на массив
        $images = explode(',', $republic->slides);



        $kicash = Kica::query()->take(5)->orderBy('id', 'desc')->get();
        $words = Word::query()->where('display', 1)->latest()->paginate(5);

        return view('republic-single', compact('republic', 'kicash', 'words', 'images'));
    }

    public function personSingle(FamousPeople  $people)
    {
        $kicash = Kica::query()->take(5)->orderBy('id', 'desc')->get();
        $words = Word::query()->where('display', 1)->latest()->paginate(5);

        return view('single-person', compact('kicash', 'words', 'people'));
    }
}
