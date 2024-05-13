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

            <div class="main-right col-xxl-10 ">
                <h3 class="page-title">Результаты</h3>
                    @if(isset($poesyItems))
                        <div class="poesy-all">
                            @foreach($poesyItems as $poesy)
                                <div class="poesy-item col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="poesy-author">
                                        <div class="poesy-author-img"><img src="{{ asset('storage/images/'.$poesy->author->avatar) }}" alt=""></div>
                                        <span>{{$poesy->author->name}}</span>
                                    </div>
                                    <div class="poesy-text">
                                        <h2>{{$poesy->title}}</h2>
                                        <div>
                                            {!! mb_substr(strip_tags($poesy->content), 0, 135) !!}
                                        </div>
                                    </div>
                                    <div class="read-more poesy-banner-btn-button poesy-banner-btn-button">
                                        <button>Читать дальше</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                @if(isset($posts))
                    <div class="tails-all col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex flex-wrap">
                        @foreach($posts as $key => $tail)
                            <div class="tail @if(in_array($key, [0, 3, 4, 7])) tail-long col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-xs-12 @else tail-short col-xxl-4 col-xl-4 col-lg-4 @endif">
                                @if(in_array($key, [0, 3, 4, 7]))
                                    <div class="tail-img col-lg-6 col-md-7">
                                        <img src="{{ asset('storage/images/'.$tail->image_main) }}" alt="tail2">
                                    </div>
                                @endif
                                <div class="tail-body">
                                    <a href="{{route('tailSingle', $tail->id)}}"><h2>{{$tail->title}}</h2></a>
                                    @if(isset($tail->lead))
                                        <p>{{ mb_substr($tail->lead, 0, 120) }}...</p>
                                    @endif
                                    <div class="author">
                                        @if(in_array($key, [0, 3, 4, 7]))
                                            <img src="{{ asset('storage/images/'.$tail->author->avatar) }}" alt="">
                                        @endif
                                        <div class="author-name">
                                            <p>{{$tail->author->name}}</p>
                                            <span>Озвучиватель</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
