<?php

namespace App\Http\Controllers\Admin\Word;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Word\UpdateRequest;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Word $word)
    {
        $data = $request->validated();

        $word->update($data);




        return redirect()->route('admin.words.index', compact('word'));
    }
}
