@extends('layouts.home2')

@section('content')
    <section class="main">
        <div class="container">
            <div class="main-left col-xxl-2">
                <div class="kicash">
                    <h2>Кицаш</h2>
                    <div class="kic-items">
                        @foreach($kicash as $kica)
                            <div class="kic-item">
                                <p>{{mb_substr($kica->title, 0, 64)}}</p>
                                <hr>
                            </div>
                        @endforeach

                    </div>
                    <div class="tail-left-next">
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

                    <a href="{{route('dictionary')}}">
                        <button class="nextIcon"><img src="{{asset('img/nextIcon.svg')}}" alt=""></button>
                    </a>
                </div>
            </div>

            <div class="main-right col-xxl-10 col-xl-10 col-lg-12 col-12">
                <div class="single-page-block col-12">
                    <div class="single-person-head">
                        <div class="author col-10">
                            <img src="{{ asset('storage/images/'.$people->image_main) }}" alt="">
                            <div class="author-name">
                                <p>{{$people->title}}</p>
                                <span>{{$people->lead}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="single-item-text mb-5" style="padding: 20px;">
                        <p>{!! $people->bio !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
