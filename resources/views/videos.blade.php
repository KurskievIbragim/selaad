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
                <h3 class="page-title">Видеош</h3>
                <div class="poesy-all videos all">
                    <div class="video-items">
                        @foreach($videos as $key => $video)
                            <div class="video">
                                <video id="{{ 'my-player' . ($key + 1) }}" poster="{{ asset('storage/images/'.$video->image_main) }}" controls width="100%" height="100%" >
                                    <source src="{{ asset('storage/videos/'.$video->videos) }}" type="video/mp4" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>.
                                    </p>
                                </video>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
