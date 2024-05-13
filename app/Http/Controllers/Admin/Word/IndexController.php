<?php

namespace App\Http\Controllers\Admin\Word;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Word;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Word $word)
    {
        $words = Word::latest()->paginate(20);
        return view('admin.words.index', compact('words'));
    }
}
