<?php



namespace App\Http\Controllers\Admin\Surt;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Surt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Surt $surt)
    {

        $data = $request->validated();
        if (isset($data['surtFile'])) {
            $data['surtFile'] = Storage::put('surtash', $data['surtFile']);
            $data['surtFile'] = str_replace('surtash/', '', $data['surtFile']);
        } else {
            // если изображение не загружено, используем старое значение
            $data['surtFile'] = $surt->surtFile;
        }

        $surt->update($data);




        return redirect()->route('admin.surt.index', compact('surt'));
    }
}
