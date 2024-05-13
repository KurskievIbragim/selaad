<?php

namespace App\Http\Controllers\Admin\Poesy;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Poesy;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class FilterController extends BaseController
{
    public function __invoke(Request $request)
    {
        $authorId = $request->input('author_id');

        $poesy = Poesy::when($authorId !== '', function ($query) use ($authorId) {
            return $query->where('author_id', $authorId);
        })->latest()->paginate(10);

        return view('admin.poesy.filtered-poesy', compact('poesy'))->render();
    }
}
