@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <div class="d-flex align-items-center">
                <a href="{{ route('admin.post.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Добавить статью</a>

                <div class="dropdown ml-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Автор
                        <span class="caret"></span></button>
                    <ul id="authors-dropdown" class="dropdown-menu" style="width: 200px; padding: 15px;">
                        <a href="#" id="show-all-posts" data-id="all">Все материалы</a>
                        @foreach($authors as $author)
                            <li><a href="#" data-id="{{$author->id}}">{{$author->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Изображение</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody id="posts-container">

                @include('admin.post.filtered-posts', ['posts' => $posts])



                </tbody>
            </table>

            <div class="mt-3">{{ $posts->links("pagination::bootstrap-4") }}</div>

        </div>
    </div>
@endsection()
