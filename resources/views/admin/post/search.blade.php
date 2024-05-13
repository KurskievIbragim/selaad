@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <div class="d-flex align-items-center">
                <a href="{{ route('admin.post.create') }}" type="button" class="btn btn-success mb-4 mt-4">Добавить статью</a>
                <div class="dropdown ml-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Фильтр
                        <span class="caret"></span></button>
                        <form action="{{route('admin.post.search')}}" method="GET">
                            <ul class="dropdown-menu" style="width: 300px; padding: 10px;">
                                <div class="d-flex align-items-center">
                                    <input class="form-control" id="searchInput" type="text" placeholder="Поиск.." name="adminPostSearch">
                                    <button class="btn-primary h-100" type="submit" style="height: 50px;">поиск</button>
                                </div>


                            </ul>

                        </form>
                </div>
            </div>

            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody>

                @foreach($posts as $post)
                <tr>
                    @method('delete')
                    <th scope="row"><a class="link-dark" href="">{{ $post->id }}</a></th>
                    <td><span class="link-dark" href="">{{ $post->title }}</span></td>
                    <td><span class="link-dark" href="">{{ $post->category->title }}</span></td>
                    <td><span class="link-dark" href="">{{ $post->created_at }}</span></td>
                    <td>
                        <div class="btn-group ">
                            <a type="button" class="btn btn-warning mr-2 link-dark" href="{{ route('admin.post.edit', $post->id) }}">Изменить</a>
                            <form action="{{ route('admin.post.delete', $post->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                            </form>

                        </div>
                    </td>


                </tr>
                @endforeach


                </tbody>
            </table>

            <div class="mt-2">
                <a class="nav-link" href="{{route('admin.post.index')}}"><-- Назад</a>
            </div>
        </div>
    </div>
@endsection()
