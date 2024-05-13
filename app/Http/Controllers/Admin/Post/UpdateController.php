<?php



namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {

        $data = $request->validated();
        if (isset($data['image_main'])) {
            // сохраняем новое изображение и обновляем ссылку
            $data['image_main'] = Storage::put('images', $data['image_main']);
            $data['image_main'] = str_replace('images/', '', $data['image_main']);
        } else {
            // если изображение не загружено, используем старое значение
            $data['image_main'] = $post->image_main;
        }

        $post->update($data);




        return redirect()->route('admin.post.index', compact('post'));
    }
}
