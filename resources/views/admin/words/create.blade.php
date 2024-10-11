@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Добавить слово</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.words.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input
                            value="{{ old('word_ing') }}"
                            class="form-control col-2" type="text" name="word_ing" placeholder="Слово на ингушском">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input
                            value="{{ old('word_translate') }}"
                            class="form-control col-2" type="text" name="word_translate" placeholder="Перевод">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="hidden" value="0" name="display">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="display">
                        <label class="form-check-label" for="flexCheckChecked">
                            Выводить на главной
                        </label>
                    </div>

                    <div class="form-group w-50">
                        <input type="datetime-local" class="datetime_input" name="published_at" style="color: #495057; width: 250px; border: 1px solid #ced4da; padding: 5px !important; ">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Добавить">
                </form>
            </div>

        </div>


    </div>

@endsection
