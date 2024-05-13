<?php

namespace App\Http\Controllers\Admin\Word;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Word $word)
    {
        return view('admin.words.show', compact('word'));
    }
}
