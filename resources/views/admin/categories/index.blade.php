@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <a href="{{ route('admin.categories.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Создать категорию</a>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                <tr>
                    @method('delete')
                    <th scope="row"><a class="link-dark" href="">{{ $category->id }}</a></th>
                    <td><span class="link-dark" href="">{{ $category->title }}</span></td>
                    <td><span class="link-dark" href="">{{ $category->created_at }}</span></td>
                    <td>
                        <div class="btn-group ">
                            <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.categories.edit', $category->id) }}">Изменить</a>
                            <form action="{{ route('admin.categories.delete', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                            </form>

                        </div>
                    </td>


                </tr>
                @endforeach
                <div class="mt-3">{{ $categories->links("pagination::bootstrap-4") }}</div>



                </tbody>
            </table>

        </div>
    </div>
@endsection()
