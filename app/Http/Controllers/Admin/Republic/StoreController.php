<?php

namespace App\Http\Controllers\Admin\Republic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Republic\StoreRequest;
use App\Models\KnowRepublic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();



        $slides = $request->file('slides');
        $slidesString = '';

        if ($slides) {
            $slideNames = [];

            foreach ($slides as $slide) {
                $filename = $slide->store('slide_images'); // Save the slide image and get the filename
                $slideNames[] = $filename; // Add the filename to the array
            }

            $slidesString = implode(',', $slideNames); // Соединяем имена файлов через запятую
        }

        if ($request->hasFile('image_main')) {
            $imageMain = $request->file('image_main');
            $imageMainPath = $imageMain->store('images'); // Store the image in the 'images' folder

            $data['image_main'] = $imageMainPath;
        }


        KnowRepublic::create([
            'title' => $request->title,
            'type' => $request->type,
            'content' => $request->content,
            'image_main' => $data['image_main'],
            'slides' => $slidesString, // Сохраняем имена файлов как строку
        ]);





       return redirect()->route('admin.republic.index');
    }
}
