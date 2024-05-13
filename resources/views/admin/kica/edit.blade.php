@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.kica.update', $kica->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input
                            value="{{ $kica->title }}"
                            class="form-control col-2" type="text" name="title" placeholder="Название стиха">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea class="form-control col-6" type="text" name="content" placeholder="Текст стиха">
                            {{ $kica->content }}
                        </textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="form-group w-50">
                        <label>Выберите категорию</label>

                        <select class="form-control" name="category_id">
                            @if($kica->category)
                                <option value="{{$kica->category->id}}">{{ $kica->category->title }}</option>
                            @endif
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->title }}</option>
                            @endforeach
                        </select>

                    </div>



                    <div class="form-group w-50">
                        <label>Выберите автора</label>

                        <select class="form-control" name="author">
                            @if(isset($kica->author->name))
                                <option value="{{$kica->author->id}}">{{$kica->author->name}}</option>
                            @else
                                <option value="">Выберите пользователя</option>
                            @endif
                            @foreach($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>

                    </div>


                    <input class="btn btn-primary" type="submit" value="Обновить">
                </form>
            </div>

        </div>


    </div>

@endsection
