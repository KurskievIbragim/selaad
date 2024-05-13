@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <div class="d-flex align-items-center">
                <a href="{{ route('admin.surt.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Добавить</a>
                <div class="dropdown ml-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Фильтр
                        <span class="caret"></span></button>
                        <form action="" method="POST">
                            <ul class="dropdown-menu" style="width: 300px; padding: 10px;">
                                <div class="d-flex align-items-center">
                                    <input class="form-control" id="searchInput" type="text" placeholder="Поиск..">
                                    <button class="btn-primary h-100" type="submit" style="height: 50px;">поиск</button>
                                </div>
                                <li><a href="#">Фаьлгаш</a></li>
                                <li><a href="#">Дувцар</a></li>
                                <li><a href="#">3</a></li>

                            </ul>

                        </form>
                </div>
            </div>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Фото</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody>

                @foreach($surtash as $surt)
                <tr>
                    @method('delete')
                    <th scope="row"><a class="link-dark" href="">{{ $surt->id }}</a></th>
                    <td><span class="link-dark" href="">{{ $surt->title }}</span></td>
                    <td><span class="link-dark" href="">{!! mb_substr($surt->lead, 0, 200 ) !!}</span></td>
                    <td><span class="link-dark" href="">
                            <img src="{{ asset('storage/surtash/'.$surt->surtFile) }}" style="width: 100px; height: 70px;"/>

                        </span></td>
                    <td><span class="link-dark" href="">{{ $surt->created_at }}</span></td>
                    <td>
                        <div class="btn-group ">
                            <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.surt.edit', $surt->id) }}">Изменить</a>
                            <form action="{{ route('admin.surt.delete', $surt->id) }}" method="post">
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

            <div class="mt-3">{{ $surtash->links("pagination::bootstrap-4") }}</div>

        </div>
    </div>
@endsection()
