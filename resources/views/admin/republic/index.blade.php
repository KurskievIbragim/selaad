@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <a href="{{ route('admin.republic.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Добавить</a>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody>

                @foreach($republics as $republic)
                <tr>
                    @method('delete')
                    <th scope="row"><a class="link-dark" href="">{{ $republic->id }}</a></th>
                    <td><span class="link-dark" href="">{{ $republic->title }}</span></td>
                    <td><span class="link-dark" href="">{{ $republic->created_at }}</span></td>
                    <td>
                        <div class="btn-group ">
                            <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.republic.edit', $republic->id) }}">Изменить</a>
                            <form action="{{ route('admin.republic.delete', $republic->id) }}" method="post">
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

            <div class="mt-3">{{ $republics->links() }}</div>

        </div>
    </div>
@endsection()
