@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Добавить пословицу</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.kica.store') }}" method="POST" enctype="multipart/form-data">
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



                    <div class="form-group w-50">
                        <label>Выберите автора</label>

                        <select class="form-control" name="author_id">
                            <option value="">Выберите автора</option>
                            @foreach($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>

                        <select name="user_id" class="form-control mt-2" >
                            <option value="">Выберите пользователя</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}" @if(old('user_id') == $user->id) selected @endif>
                                    {{$user->name . '(' . $user->id . ')'}}
                                </option>
                            @endforeach
                        </select>

                    </div>



                    <input class="btn btn-primary" type="submit" value="Добавить">
                </form>
            </div>

        </div>


    </div>

@endsection
