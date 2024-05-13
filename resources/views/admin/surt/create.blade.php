@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Добавить фотографию</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.surt.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input
                            value="{{ old('title') }}"
                            class="form-control col-6" type="text" name="title" placeholder="Заголовок">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group w-50">
                        <h4>Описание</h4>
                        <textarea id="summernote" name="lead"></textarea>
                        @error('lead')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label for="exampleInputFile">Изображение </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="surtFile" value="{{ old('surtFile') }}">
                                <label class="custom-file-label" >Выберите изображение</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group w-50">
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
