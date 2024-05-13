@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <a href="{{ route('admin.authors.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Добавить автора</a>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Позиция</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody>

                @foreach($authors as $author)
                <tr>
                    @method('delete')
                    <th scope="row"><a class="link-dark" href="">{{ $author->id }}</a></th>
                    <td><span class="link-dark" href="">{{ $author->name }}</span></td>
                    <td><span class="link-dark" href="">{{ $author->job }}</span></td>
                    <td><span class="link-dark" href="">{{ $author->created_at }}</span></td>
                    <td>
                        <div class="btn-group ">
                            <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.authors.edit', $author->id) }}">Изменить</a>
                            <form action="{{ route('admin.authors.delete', $author->id) }}" method="post">
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

            <div class="mt-3">{{ $authors->links("pagination::bootstrap-4") }}</div>

        </div>
    </div>
@endsection()
