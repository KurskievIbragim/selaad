@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить статью</h2>

        <div class="row">
            <div class="col-12">
                <form id="updateForm" action="{{ route('admin.surt.update', $surt->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input
                            value="{{ $surt->title }}"
                            class="form-control col-2" type="text" name="title" placeholder="Заголовок">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group w-50">
                        <textarea class="form-control col-6" type="text" name="lead" placeholder="Текст" id="summernote">
                            {{ $surt->lead }}
                        </textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label for="exampleInputFile">Изображение</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="surtFile" name="surtFile" value="{{asset('storage/surtash/'.$surt->surtFile)}}" src="{{asset('storage/surtash/'.$surt->surtFile)}}">
                                <label class="custom-file-label" for="image_main">{{asset('storage/surtash/'.$surt->surtFile)}}</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>

                    <div style="width: 170px; height: 100px; margin-bottom: 100px" >
                        <h3 class="w-100">Текущее изображение</h3>
                        <img src="{{asset('storage/surtash/'.$surt->surtFile)}}" alt="" style="width: 100%; height: 100%">
                    </div>




                    <div class="form-group w-50">

                        <select name="user_id" class="form-control mt-2" >
                            @if(isset($surt->user->name))
                                <option value="{{$surt->user->id}}">{{$surt->user->name}}</option>
                            @else
                                <option value="">Выберите пользователя</option>
                            @endif
                            @foreach($users as $user)
                                <option value="{{$user->id}}" @if(old('user_id') == $user->id) selected @endif>
                                    {{$user->name . '(' . $user->id . ')'}}
                                </option>
                            @endforeach
                        </select>

                    </div>


                    <input class="btn btn-primary" type="submit" value="Обновить">
                </form>
            </div>

        </div>


    </div>

@endsection

