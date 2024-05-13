<?php

namespace App\Http\Controllers\Admin\Word;

use App\Http\Controllers\Controller;
use App\Models\Word;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Word $word)

    {

        $words = Word::all();
        return view('admin.words.edit', compact('word',  'words'));
    }
}
