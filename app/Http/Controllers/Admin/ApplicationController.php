<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ApplicationController extends Controller
{

    public function index()
    {
        $applications = Application::paginate(10);

        return view('admin.application.index', compact('applications'));
    }

    public function store(Request $request)
    {

        // Создание заявки на основе полученных данных из формы
        $application = new Application();
        $application->user_id = $request['user_id'];
        $application->name = $request['name'];
        $application->email = $request['email'];
        $application->publication_type = $request['publication_type'];




// Дополнительные поля в зависимости от типа заявки
        if ($request->publication_type == 'Poesy') {
            $application->title = $request['user_poesy_title'];
            $application->text = $request['user-poesy-text'];
        }
        if ($request->publication_type == 'Tail') {
            $application->title = $request['user-tail-title'];
            $application->text = $request['user-tail-text'];

            if ($request->hasFile('user_tail_file')) {
                $request['user_tail_file'] = Storage::put('images', $request['user_tail_file']);
            }
        }
        if ($request->publication_type == 'Kic') {
            $application->title = $request['user-kic-title'];
            $application->text = $request['user-kic-text'];
        }

        // Handle file upload
        if ($request->hasFile('user_tail_file')) {
            $file = $request->file('user_tail_file');
            $path = $file->store('images'); // This will store the file in the 'images' directory
        }

        if ($request->publication_type == 'Surt') {
            $application->title = $request['surtTitle'];

            if ($request->hasFile('surtFile')) {
                $file = $request->file('surtFile');
                $path = $file->store('images');
                $application->surtFile = $path;
            }
        }


        $application->user_locality = $request['user_locality'];
        $application->user_school = $request['user_school'];
        $application->user_class = $request['user_class'];


        if (isset($path)) {
            $application->user_tail_file = $path; // Save the file path to the database
        }




        $application->save();

        return redirect()->back()->with('success', 'Заявка успешно создана!');
    }


    public function destroy(Application $application)
    {
        $application->delete();

        return redirect()->route('application-index');
    }

    public function show(Application $application)
    {

        $user = User::query()->where('id', $application->user_id)->get();

        return view('admin.application.show', compact('user', 'application'));
    }

}

