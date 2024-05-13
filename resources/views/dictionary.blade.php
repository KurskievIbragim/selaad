@extends('layouts.home2')

@section('content')
    <section class="main">
        <div class="container">
            <div class="main-left col-xxl-2 col-xl-2 col-lg-2">
                <div class="kicash col-xxl-12 col-xl-12 col-lg-12">
                    <h2>Кицаш</h2>
                    <div class="kic-items">
                        @foreach($kicash as $kica)
                            <div class="kic-item">


                                <p><?php
                                       $shortenedTitle = mb_substr($kica->title, 0, 45);

                                       if (mb_strlen($kica->title) > 45) {
                                           $shortenedTitle .= '...';
                                       }

                                       echo "<p>{$shortenedTitle}</p>";
                                       ?></p>
                                <hr>
                            </div>
                        @endforeach

                    </div>
                    <div class="d-flex flex-end">
                        <a href="{{route('kicash')}}"><button class="nextIcon"><img src="img/nextIcon.svg" alt=""></button></a>
                    </div>
                </div>
            </div>

            <div class="main-right col-xxl-10">
                <h3 class="page-title">Дошлорг</h3>

                <div class="filters-row d-flex align-center">

                </div>

                <div class="words-all" id="posts-container" data-next-page-url="{{ $words->nextPageUrl() }}">
                    @include('load')
                </div>
                <div id="more-words-btn d-flex">
                    <button id="more-words-button" class="d-flex justify-content-center"><img src="{{asset('img/infinity.svg')}}" alt=""></button>
                </div>
            </div>
        </div>
    </section>
@endsection
