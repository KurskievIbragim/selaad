@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить статью</h2>

        <div class="row">
            <div class="col-12">
                <form id="updateForm" action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input
                            value="{{ $post->title }}"
                            class="form-control col-2" type="text" name="title" placeholder="Заголовок">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <h4>Лид новости</h4>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="lead">
                            {{ $post->lead }}
                        </textarea>
                        @error('lead')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <textarea class="form-control col-6" type="text" name="content" placeholder="Текст статьи" id="summernote">
                            {{ $post->content }}
                        </textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label for="exampleInputFile">Изображение</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image_main" name="image_main" value="{{ asset('storage/images/'.$post->image_main) }}" src="{{ asset('storage/images/'.$post->image_main) }}">
                                <label class="custom-file-label" for="image_main">{{asset('storage/images/'.$post->image_main)}}</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>

                    <div style="width: 170px; height: 100px; margin-bottom: 100px" >
                        <h3 class="w-100">Текущее изображение</h3>
                        <img src="{{asset('storage/images/'.$post->image_main)}}" alt="" style="width: 100%; height: 100%">
                    </div>

                    <div class="form-group w-50">
                        <label>Выберите категорию</label>

                        <select class="form-control" name="category_id">
                            @if($post->category)
                                <option value="{{$post->category->id}}">{{ $post->category->title }}</option>
                            @endif
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->title }}</option>
                            @endforeach
                        </select>

                    </div>



                    <div class="form-group w-50">
                        <label>Выберите автора</label>
                        <select class="form-control" name="author">
                            @if(isset($post->author->name))
                                <option value="{{$post->author->id}}">{{$post->author->name}}</option>
                            @else
                                <option value="">Выберите автора</option>
                            @endif
                            @foreach($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>

                        <select name="user_id" class="form-control mt-2" >
                            @if(isset($post->user->name))
                                <option value="{{$post->user->id}}">{{$post->user->name}}</option>
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


                    <div class="form-group w-50">
                        <input type="datetime-local" class="datetime_input" name="published_at"
                               style="color: #495057; width: 250px; border: 1px solid #ced4da;
                                   padding: 5px !important; "
                               value="{{ $post->published_at ? date('Y-m-d\TH:i', strtotime($post->published_at)) : '' }}"                            >
                    </div>


                    <input class="btn btn-primary" type="submit" value="Обновить">
                </form>
            </div>

        </div>


    </div>

@endsection

