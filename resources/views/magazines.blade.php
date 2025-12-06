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
                        <a href="{{route('kicash')}}">
                            <button class="nextIcon">
                                <img src="{{asset('img/nextIcon.svg')}}" alt="">
                            </button>
                        </a>
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
                        <button class="nextIcon">
                            <img src="{{asset('img/nextIcon.svg')}}" alt="">
                        </button>
                    </a>
                </div>
            </div>


            <div class="main-right">
                <h3 class="page-title">Журналаш</h3>
                <div class="peoples magazine-page col-xxl-12">
                    @foreach($magazines as $magazine)
                        <a href="{{'storage/magazines/' . $magazine->file}}" target="_blank">
                            <div class="people">
                                <div class="magazine-date">
                                    <span>{{'№' . $magazine->number}}</span>
                                    <p>{{$magazine->year}}</p>
                                </div>
                                <img src="{{ asset('storage/previews/'.$magazine->preview) }}" alt="">
                            </div>
                        </a>
                    @endforeach
                </div>
                <div>
                    {{$magazines->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </section>
@endsection
