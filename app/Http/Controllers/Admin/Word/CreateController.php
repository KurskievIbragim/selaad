<?php

namespace App\Http\Controllers\Admin\Word;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Word\StoreRequest;
use App\Models\Word;
use App\Models\Category;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Word $word, Category $categories)
    {

        $categories = Category::all();
        $words = Word::all();



        return view('admin.words.create', compact('word', 'categories', 'words'));
    }
}
