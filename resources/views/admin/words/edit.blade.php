@extends('layouts/admin')

@section('content')

    <div class="container-fluid">

        <h2 class="mb-3">Изменить</h2>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.words.update', $word->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input
                            value="{{ $word->word_ing }}"
                            class="form-control col-2" type="text" name="word_ing" placeholder="Слово на ингушском">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input
                            value="{{ $word->word_translate }}"
                            class="form-control col-2" type="text" name="word_translate" placeholder="Перевод">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="hidden" value="0" name="display">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="display" {{ $word->display ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexCheckChecked">
                            Выводить на главной
                        </label>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Обновить">
                </form>
            </div>

        </div>


    </div>

@endsection