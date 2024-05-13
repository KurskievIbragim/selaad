@extends('layouts.admin')


@section('content')
    <div>
        <div>
            <div class="d-flex align-items-center">
                <a href="{{ route('admin.post.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Добавить
                    статью</a>
                <div class="dropdown ml-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Фильтр
                        <span class="caret"></span></button>
                    <form action="{{route('admin.search')}}" method="GET">
                        <ul class="dropdown-menu" style="width: 300px; padding: 10px;">
                            <div class="d-flex align-items-center">
                                <input class="form-control" id="searchInput" type="text" placeholder="Поиск.."
                                       name="adminPostSearch">
                                <button class="btn-primary h-100" type="submit" style="height: 50px;">поиск</button>
                            </div>


                        </ul>

                    </form>
                </div>
            </div>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody>


                @if(isset($posts))
                    @foreach($posts as $post)
                        <tr>
                            @method('delete')
                            <th scope="row"><a class="link-dark" href="">{{ $post->id }}</a></th>
                            <td><span class="link-dark" href="">{{ $post->title }}</span></td>
                            <td><span class="link-dark" href="">{{ $post->category->title }}</span></td>
                            <td><span class="link-dark" href="">{{ $post->created_at }}</span></td>
                            <td>
                                <div class="btn-group ">
                                    <a type="button" class="btn btn-warning mr-2 link-dark"
                                       href="{{ route('admin.post.edit', $post->id) }}">Изменить</a>
                                    <form action="{{ route('admin.post.delete', $post->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                                    </form>

                                </div>
                            </td>


                        </tr>
                    @endforeach
                @endif

                @if(isset($kicash))
                    @foreach($kicash as $kic)
                        <tr>
                            @method('delete')
                            <th scope="row"><a class="link-dark" href="">{{ $kic->id }}</a></th>
                            <td><span class="link-dark" href="">{{ $kic->title }}</span></td>
                            <td><span class="link-dark" href="">{{ $kic->category->title }}</span></td>
                            <td><span class="link-dark" href="">{{ $kic->created_at }}</span></td>
                            <td>
                                <div class="btn-group ">
                                    <a type="button" class="btn btn-warning mr-2 link-dark"
                                       href="{{ route('admin.kica.edit', $kic->id) }}">Изменить</a>
                                    <form action="{{ route('admin.kica.delete', $kic->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                                    </form>

                                </div>
                            </td>


                        </tr>
                    @endforeach
                @endif

                @if(isset($poesyItems))
                    @foreach($poesyItems as $item)
                        <tr>
                            @method('delete')
                            <th scope="row"><a class="link-dark" href="">{{ $item->id }}</a></th>
                            <td><span class="link-dark" href="">{{ $item->title }}</span></td>
                            <td><span class="link-dark" href="">{{ $item->category->title }}</span></td>
                            <td><span class="link-dark" href="">{{ $item->created_at }}</span></td>
                            <td>
                                <div class="btn-group ">
                                    <a type="button" class="btn btn-warning mr-2 link-dark"
                                       href="{{ route('admin.poesy.edit', $item->id) }}">Изменить</a>
                                    <form action="{{ route('admin.poesy.delete', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                                    </form>

                                </div>
                            </td>


                        </tr>
                    @endforeach
                @endif

                @if(isset($famousPeople))
                    @foreach($poesyItems as $item)
                        <tr>
                            @method('delete')
                            <th scope="row"><a class="link-dark" href="">{{ $item->id }}</a></th>
                            <td><span class="link-dark" href="">{{ $item->title }}</span></td>
                            <td><span class="link-dark" href="">{{ $item->category->title }}</span></td>
                            <td><span class="link-dark" href="">{{ $item->created_at }}</span></td>
                            <td>
                                <div class="btn-group ">
                                    <a type="button" class="btn btn-primary mr-2 link-dark"
                                       href="{{ route('admin.poesy.edit', $item->id) }}">Изменить</a>
                                    <form action="{{ route('admin.poesy.delete', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                                    </form>

                                </div>
                            </td>


                        </tr>
                    @endforeach
                @endif

                @if(isset($famousPeoples))
                    @foreach($famousPeoples as $people)
                        <tr>
                            @method('delete')
                            <th scope="row"><a class="link-dark" href="">{{ $people->id }}</a></th>
                            <td><span class="link-dark" href="">{{ $people->title }}</span></td>
                            <td><span class="link-dark" href="">{{ $people->created_at }}</span></td>
                            <td>
                                <div class="btn-group ">
                                    <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.famous.edit', $people->id) }}">Изменить</a>
                                    <form action="{{ route('admin.famous.delete', $people->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                                    </form>

                                </div>
                            </td>


                        </tr>
                    @endforeach
                @endif

                @if(isset($words))
                    @foreach($words as $word)
                        <tr>
                            @method('delete')
                            <th scope="row"><a class="link-dark" href="">{{ $word->id }}</a></th>
                            <td><span class="link-dark" href="">{{ $word->word_ing }}</span></td>
                            <td><span class="link-dark" href="">{{ $word->word_translate }}</span></td>
                            <td><span class="link-dark" href="">{{ $word->created_at }}</span></td>
                            <td>
                                <div class="btn-group ">
                                    <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.words.edit', $word->id) }}">Изменить</a>
                                    <form action="{{ route('admin.words.delete', $word->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                                    </form>

                                </div>
                            </td>


                        </tr>
                    @endforeach
                @endif




                </tbody>
            </table>

            <div class="mt-2">
                <a class="nav-link" href="{{route('admin.post.index')}}"><-- Назад</a>
            </div>
        </div>
    </div>
@endsection()
