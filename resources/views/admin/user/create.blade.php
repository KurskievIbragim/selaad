@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Создать пользователя</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input class="form-control col-6" type="text" name="name" placeholder="Имя пользователя">
                        @error('name')
                            <div class="text-danger">Это поле должно быть заполнено</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control col-6" type="email" name="email" placeholder="Email">
                        @error('email')
                        <div class="text-danger">Это поле должно быть заполнено</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label for="exampleInputFile">Аватар </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="avatar" value="{{ old('avatar') }}">
                                <label class="custom-file-label" >Выберите изображение</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input class="form-control col-2" type="password" name="password" placeholder="Введите пароль">
                        @error('password')
                        <div class="text-danger">Это поле должно быть заполнено</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label>Выберите Роль</label>
                        <select class="form-control" name="role">
                            @foreach($roles as $id => $role)
                                <option value="{{$id}}" {{ $id == $user->role ? 'selected' : '' }}>{{ $role }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group w-50">
                        <label>Населенный пункт</label>
                        <select class="form-control" name="locality">
                            @foreach($locality as $id => $item)
                                <option value="{{$id}}" {{ $id = $item->$locality ? 'selected' : ''}}>{{ $item->locality }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="form-control col-6" type="text" name="school" placeholder="Школа">
                        @error('name')
                        <div class="text-danger">Это поле должно быть заполнено</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control col-6" type="text" name="class" placeholder="Класс">
                        @error('name')
                        <div class="text-danger">Это поле должно быть заполнено</div>
                        @enderror
                    </div>




                    <input class="btn btn-primary" type="submit" value="Добавить">
                </form>
            </div>

        </div>


    </div>

@endsection
