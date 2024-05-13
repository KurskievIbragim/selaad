@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.republic.update', $republic->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input
                            value="{{ $republic->title }}"
                            class="form-control col-2" type="text" name="title" placeholder="Название статьи">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <h4>Лид</h4>
                        <textarea name="type">{{ $republic->type }}</textarea>
                        @error('lead')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <textarea class="form-control col-6" type="text" name="content" placeholder="Текст статьи" id="summernote">
                            {{ $republic->content }}
                        </textarea>
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
                            <input type="file"  name="slides[]" multiple id="sliderInput">
                            <label for="sliderInput">Слайд-шоу фотографий</label>
                        </div>

                    </div>


                    <input class="btn btn-primary" type="submit" value="Обновить">
                </form>
            </div>

        </div>


    </div>

@endsection
