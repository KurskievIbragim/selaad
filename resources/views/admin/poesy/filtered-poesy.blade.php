@foreach($poesy as $item)
    <tr>
        @method('delete')
        <th scope="row"><a class="link-dark" href="">{{ $item->id }}</a></th>
        <td><span class="link-dark" href="">{{ $item->title }}</span></td>
        <td><span class="link-dark" href="">{{ $item->created_at }}</span></td>
        <td>
            <div class="btn-group ">
                <a type="button" class="btn btn-primary mr-2 link-dark" href="{{ route('admin.poesy.edit', $item->id) }}">Изменить</a>
                <form action="{{ route('admin.poesy.delete', $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger link-dark">Удалить</button>
                </form>

            </div>
        </td>


    </tr>
@endforeach
