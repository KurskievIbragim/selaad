@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Добавить видео</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input
                            value="{{ old('title') }}"
                            class="form-control col-2" type="text" name="title" placeholder="Заголовок">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group w-50">
                        <label for=image_main">Превью</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image_main" id="image_main">
                                <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group w-50">
                        <label for=video">Видео</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="videos" id="video">
                                <label class="custom-file-label" for="exampleInputFile">Выберите видео</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>


                    <input class="btn btn-primary" type="submit" value="Добавить">
                </form>
            </div>

        </div>


    </div>

@endsection
