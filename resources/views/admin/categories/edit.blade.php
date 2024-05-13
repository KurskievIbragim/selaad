@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить категорию</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input class="form-control col-4" type="text" name="title" placeholder="Название категории" value="{{ $category->title }}">
                        @error('title')
                        <div class="text-danger">Это поле должно быть заполнено</div>
                        @enderror
                    </div>
                    <input class="btn btn-primary" type="submit" value="Изменить">
                </form>
            </div>

        </div>


    </div>

@endsection
