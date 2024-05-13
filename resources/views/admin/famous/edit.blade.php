@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить персонаж</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.famous.update', $famousPeople->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input
                            value="{{ $famousPeople->title }}"
                            class="form-control col-2" type="text" name="title" placeholder="Имя Фамилия">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group col-6">
                        <h4>Лид</h4>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="lead">
                            {{ $famousPeople->lead }}
                        </textarea>
                        @error('lead')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <h4>Биография</h4>
                        <textarea id="summernote" name="bio">
                             {{ $famousPeople->bio }}
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
                                <label class="custom-file-label" for="image_main">{{ old('image_main') ?? 'Выберите изображение' }}</label>
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

                    <input class="btn btn-primary" type="submit" value="Обновить">
                </form>
            </div>

        </div>


    </div>

@endsection
