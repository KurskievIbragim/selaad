<?php


namespace App\Service;


use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryService
{
    public function store($data) {
        try {

            if(isset($data['image'])) {

            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
            }


            $post = Post::FirstOrCreate($data);

        }catch (\Exception $exception) {
            abort(404);
        }
    }




}
