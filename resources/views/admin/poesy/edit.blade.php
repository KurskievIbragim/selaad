@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить стих</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.poesy.update', $poesy->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input
                            value="{{ $poesy->title }}"
                            class="form-control col-2" type="text" name="title" placeholder="Название стиха">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <h4>Лид стиха</h4>
                        <textarea id="summernote1" rows="3" name="lead">
                            {{$poesy->lead}}
                        </textarea>
                        @error('lead')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <h4>Стих</h4>
                        <textarea id="summernote" name="content">
                            {{ $poesy->content }}
                        </textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group w-50">
                        <label>Выберите категорию</label>

                        <select class="form-control" name="category_id">
                            @if($poesy->category)
                                <option value="{{$poesy->category->id}}">{{ $poesy->category->title }}</option>
                            @endif
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->title }}</option>
                            @endforeach
                        </select>

                    </div>



                    <div class="form-group w-50">
                        <label>Выберите автора</label>
                        <select class="form-control" name="author">
                            @if(isset($poesy->author->name))
                                <option value="{{$poesy->author->id}}">{{$poesy->author->name}}</option>
                            @else
                                <option value="">Выберите автора</option>
                            @endif
                            @foreach($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>

                        <select name="user_id" class="form-control mt-2" >
                            @if(isset($post->user->name))
                                <option value="{{$poesy->user->id}}">{{$poesy->user->name}}</option>
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
                               value="{{ $poesy->published_at ? date('Y-m-d\TH:i', strtotime($poesy->published_at)) : '' }}"                            >
                    </div>


                    <input class="btn btn-primary" type="submit" value="Обновить">
                </form>
            </div>

        </div>


    </div>

@endsection
