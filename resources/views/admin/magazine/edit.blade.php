@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.magazine.update', $magazine->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input value="{{$magazine->number}}" class="form-control col-2" type="text" name="number" placeholder="Номер журнала">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control col-2" type="date" name="year" placeholder="Год выхода" value="{{$magazine->year}}">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label for=image_main">Превью</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="preview" id="preview">
                                <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group w-50">
                        <label for=video">Файл</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file" id="file">
                                <label class="custom-file-label" for="exampleInputFile">Выберите pdf-файл</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group w-50">
                        <input type="datetime-local" class="datetime_input" name="published_at"
                               style="color: #495057; width: 250px; border: 1px solid #ced4da;
                                   padding: 5px !important; "
                               value="{{ $magazine->published_at ? date('Y-m-d\TH:i', strtotime($magazine->published_at)) : '' }}"                            >
                    </div>

                    <input class="btn btn-primary" type="submit" value="Обновить">
                </form>
            </div>

        </div>


    </div>

@endsection
