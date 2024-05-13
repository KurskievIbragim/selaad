@extends('layouts/admin')

@section('content')

    <main class="blog-post">
        <div class="container">

            <h1 class="edica-page-title" data-aos="fade-up">{{ $application->title }}</h1>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $application->user_tail_file) }}" alt="featured image" class="w-95">
            </section>

            <section class="post-content">
                <div class="row">
                    <div class="mt-2" data-aos="fade-up">
                        <p style="font-size: 18px"> {{ $application->text }}</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="author">
                        <h3>{{$application->name . '(' . $application->user_id . ')'}}</h3>
                        <p>
                            <span>{{$application->user_locality}}</span>
                            <span>{{$application->user_school . ' школерча'}}</span>
                            <span>{{$application->user_class . ' класс'}}</span>
                        </p>
                    </div>
                </div>

            </section>

        </div>
    </main>

@endsection
