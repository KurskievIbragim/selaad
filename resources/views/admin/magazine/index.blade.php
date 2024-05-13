@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <a href="{{ route('admin.magazine.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Добавить журнал</a>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Номер</th>
                    <th scope="col">Год выхода</th>
                    <th scope="col">Preview</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody>

                @foreach($magazines as $magazine)
                <tr>
                    @method('delete')
                    <th scope="row"><a class="link-dark" href="">{{ $magazine->id }}</a></th>
                    <td><span class="link-dark" href="">{{ $magazine->number }}</span></td>
                    <td><span class="link-dark" href="">{{ $magazine->year }}</span></td>
                    <td><span class="link-dark" href="">{{ $magazine->preview }}</span></td>
                    <td><span class="link-dark" href="">{{ $magazine->created_at }}</span></td>
                    <td>
                        <div class="btn-group ">
                            <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.magazine.edit', $magazine->id) }}">Изменить</a>
                            <form action="{{ route('admin.magazine.delete', $magazine->id) }}" method="post">
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

            <div class="mt-3">{{ $magazines->links("pagination::bootstrap-4") }}</div>

        </div>
    </div>
@endsection()
