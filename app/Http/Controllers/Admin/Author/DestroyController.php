<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Author $author)
    {
        $author->delete();

        return redirect()->route('admin.authors.index');
    }
}
