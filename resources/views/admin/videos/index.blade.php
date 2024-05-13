@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <a href="{{ route('admin.videos.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Добавить видео</a>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody>

                @foreach($videos as $video)
                <tr>
                    @method('delete')
                    <th scope="row"><a class="link-dark" href="">{{ $video->id }}</a></th>
                    <td><span class="link-dark" href="">{{ $video->title }}</span></td>
                    <td><span class="link-dark" href="">{{ $video->created_at }}</span></td>
                    <td>
                        <div class="btn-group ">
                            <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.videos.edit', $video->id) }}">Изменить</a>
                            <form action="{{ route('admin.videos.delete', $video->id) }}" method="post">
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

            <div class="mt-3">{{ $videos->links() }}</div>

        </div>
    </div>
@endsection()
