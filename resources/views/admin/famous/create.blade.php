@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Добавить персонажа</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.famous.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input
                            value="{{ old('title') }}"
                            class="form-control col-6" type="text" name="title" placeholder="Имя и фамилия">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <h4>Лид</h4>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="lead"></textarea>
                        @error('lead')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <h4>Биография</h4>
                        <textarea id="summernote" name="bio"></textarea>
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
                        <label>Выберите категорию</label>

                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{ $category->title }}</option>
                            @endforeach
                        </select>

                    </div>

                    <input class="btn btn-primary" type="submit" value="Добавить">
                </form>
            </div>

        </div>


    </div>

@endsection
