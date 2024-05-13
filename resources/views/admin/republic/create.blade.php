@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Добавить</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.republic.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input
                            value="{{ old('title') }}"
                            class="form-control col-2" type="text" name="title" placeholder="Заголовок">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input
                            value="{{ old('type') }}"
                            class="form-control col-2" type="text" name="type" placeholder="Тип">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group w-50">
                        <h4>Текст</h4>
                        <textarea id="summernote" name="content"></textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label for="exampleInputFile">Изображение </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image_main" value="{{ old('image_main') }}">
                                <label class="custom-file-label" >Выберите изображение</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group w-50">
                        <div class="custom-file">
                            <input type="file" name="slides[]" multiple>
                            <label for="exampleInputFile">Слайд-шоу фотографий</label>
                        </div>
                    </div>



                    <input class="btn btn-primary" type="submit" value="Добавить">
                </form>
            </div>

        </div>


    </div>

@endsection
