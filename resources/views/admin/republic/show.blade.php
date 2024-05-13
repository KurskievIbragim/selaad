@extends('layouts/main')

@section('content')

    <main class="blog-post">
        <div class="container">

            <h1 class="edica-page-title" data-aos="fade-up">{{ $republic->title }}</h1>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $republic->image_main) }}" alt="featured image" class="w-100">
            </section>

            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <p> {{ $republic->content }}</p>
                    </div>
                </div>


            </section>

        </div>
    </main>

@endsection
