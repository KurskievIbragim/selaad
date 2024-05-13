@extends('layouts.home2')

@section('content')
    <section class="main">
        <div class="container">
            <div class="main-left col-xxl-2">
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
                        <a href="{{route('kicash')}}"><button class="nextIcon"><img src="{{asset('img/nextIcon.svg')}}" alt=""></button></a>
                    </div>
                </div>
                <div class="dictionary">
                    <h2 tooltip="Словарь">Дошлорг</h2>

                    <div class="words">
                        @foreach($words as $word)
                            <div>
                                <span class="word">{{$word->word_ing}} -</span>
                                <span class="word-translate"> {{$word->word_translate}}</span>
                            </div>
                        @endforeach
                    </div>

                    <a href="{{route('dictionary')}}"><button class="nextIcon"><img src="{{asset('img/nextIcon.svg')}}" alt=""></button></a>
                </div>
            </div>


            <div class="main-right">
                <h3 class="page-title">Сийдола нах</h3>
                <div class="peoples persons-page col-xxl-12">
                    @foreach($persons as $people)
                        <div class="people">
                            <div class="people-avatar">
                                <img src="{{ asset('storage/images/'.$people->image_main) }}" alt="">
                            </div>

                            <div class="people-name">
                                <a href="{{route('personSingle', $people->id)}}"><h3>{{$people->title}}</h3></a>
                            </div>


                            <div class="people-bio">
                                {{ mb_substr($people->lead, 0, 120) }}...
                            </div>



                            <div class="nextBtn">
                                <a href="{{route('personSingle', $people->id)}}"><button class="nextIcon"><img src="{{asset('img/nextIcon.svg')}}" alt=""></button></a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
