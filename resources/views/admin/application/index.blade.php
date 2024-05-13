@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Тип публикации</th>
                    <th scope="col">Автор</th>
                    <th scope="col">Создан</th>
                    <th scope="col">Отредактирован</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>

                @foreach($applications as $item)
                    <tr>
                        @method('delete')
                        <th scope="row"><a class="link-dark" href="">{{ $item->id }}</a></th>
                        <td><span class="link-dark" href="">{{ $item->title }}</span></td>
                        <td><span class="link-dark" href="">{{ $item->publication_type }}</span></td>
                        <td><span class="link-dark" href="">{{ $item->name }}</span></td>
                        <td><span class="link-dark" href="">{{ $item->created_at }}</span></td>
                        <td><span class="link-dark" href="">{{ $item->created_at }}</span></td>
                        <td>
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary mr-2 link-dark" target="_blank" href="{{route('application-show', $item->id)}}">Показать</a>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group ">
                                <form action="{{ route('application-destroy', $item->id) }}" method="post">
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

            <div class="mt-3">{{ $applications->links("pagination::bootstrap-4") }}</div>

        </div>
    </div>
@endsection()
