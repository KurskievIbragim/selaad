@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить пользователя</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input class="form-control col-2" type="text" name="name" placeholder="Название тега" value="{{ $user->name }}">
                        @error('name')
                        <div class="text-danger">Это поле должно быть заполнено</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control col-2" type="email" name="email" placeholder="Email" value="{{ $user->email }}">
                        @error('email')
                        <div class="text-danger">Это поле должно быть заполнено</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label>Выберите Роль</label>
                        <select class="form-control" name="role">
                            @foreach($roles as $id => $role)
                                <option value="{{$id}}" {{ $id = $user->$role ? 'selected' : ''}}>{{ $role }}</option>
                            @endforeach
                        </select>
                    </div>

                    

                    <div class="form-group w-25">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Изменить">
                </form>
            </div>

        </div>


    </div>

@endsection
