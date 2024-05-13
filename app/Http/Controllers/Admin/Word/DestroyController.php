<?php

namespace App\Http\Controllers\Admin\Word;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Word;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Word $word)
    {
        $word->delete();

        return redirect()->route('admin.words.index');
    }
}
