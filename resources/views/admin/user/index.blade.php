@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <a href="{{ route('admin.user.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Создать пользователя</a>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Создан</th>
                    <th scope="col">Действие</th>
                    <th scope="col">Роль</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                <tr>
                    @method('delete')
                    <th scope="row"><a class="link-dark" href="">{{ $user->id }}</a></th>
                    <td><span class="link-dark" href="">{{ $user->name }}</span></td>
                    <td><span class="link-dark" href="">{{ $user->created_at }}</span></td>
                    <td>
                        <div class="btn-group ">
                            <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.user.edit', $user->id) }}">Изменить</a>
                            <form action="{{ route('admin.user.delete', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                            </form>

                        </div>
                    </td>
                    <td><span class="link-dark" href="">{{ $user->role }}</span></td>


                </tr>
                @endforeach



                </tbody>
            </table>

        </div>
    </div>
@endsection()
