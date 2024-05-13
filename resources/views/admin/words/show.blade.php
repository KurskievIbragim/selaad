@extends('layouts/main')

@section('content')

    <main class="blog-post">
        <div class="container">

            <h2 class="edica-page-title" data-aos="fade-up">{{ $word->word_ing }}</h2>
            <h2 class="edica-page-title" data-aos="fade-up">{{ $word->word_translate }}</h2>


        </div>
    </main>

@endsection
