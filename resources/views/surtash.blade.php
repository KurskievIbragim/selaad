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
                            <button class="nextIcon"><img src="{{asset('img/nextIcon.svg')}}" alt=""></button>
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
                        <button class="nextIcon"><img src="{{asset('img/nextIcon.svg')}}" alt=""></button>
                    </a>
                </div>
            </div>

            <div class="main-right col-xxl-10">
                <h3 class="page-title">Сурташ</h3>
                <div class="photos-all">
                    @foreach($photos as $photo)

                            <div class="photo single-photo col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="kid-photo col-xxl-8 col-xl-8 col-lg-6 col-md-6">
                                    <img src="{{ asset('storage/surtash/'.$photo->surtFile) }}"/>
                                </div>

                                <div class="photo-body col-xxl-4 col-xl-4 col-lg-6 col-md-5">
                                   @if(isset($photo->title))
                                        <h2>{{$photo->title}}</h2>
                                   @endif

                                    @if(isset( $photo->lead))
                                           <p>{!! $photo->lead !!}</p>
                                    @endif

                                    @if(isset($photo->user))
                                        <div class="author col-xxl-8 col-xl-8 col-lg-8">
                                            <img src="{{asset('img/author3.png')}}" alt="">
                                            <div class="author-name col-xxl-8 col-xl-8 col-lg-8">
                                                <p>{{$photo->user->name}}</p>
                                                <span>{{$photo->user->locality}}  {{$photo->user->school}}  йола ишкола {{$photo->user->class}} классера дешархо </span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                    @endforeach

                        <div class="d-flex justify-content-center mt-2">
                            {{$photos->links("pagination::bootstrap-4")}}
                        </div>
                </div>
            </div>
        </div>
    </section>



@endsection
