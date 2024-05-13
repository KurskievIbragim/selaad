@extends('layouts/admin')


@section('content')
    <div>
        <div>
            <a href="{{ route('admin.words.create') }}" type="button" class="btn btn-primary mb-4 mt-4">Добавить</a>

            <table class="table table-striped table-grey">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Слово</th>
                    <th scope="col">Перевод</th>
                    <th scope="col">Создан</th>
                </tr>
                </thead>
                <tbody>

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



                </tbody>
            </table>

            <div class="mt-3">{{ $words->links("pagination::bootstrap-4") }}</div>

        </div>
    </div>
@endsection()
