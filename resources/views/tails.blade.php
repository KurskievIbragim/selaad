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

            <div class="main-right col-xxl-10 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="page-title">Фаьлгаш</h3>
                <div class="tails-all col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex flex-wrap">
                    @foreach($tails as $key => $tail)
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
                                    @if(isset($tail->user->name))
                                        @if(in_array($key, [0, 3, 4, 7]))
                                            @if($tail->user->avatar)
                                                <img src="{{ asset('storage/avatars/'.$tail->user->avatar) }}" alt="">
                                            @endif
                                        @endif
                                        <p>{{$tail->user->name}}</p>
                                        @if(isset($tail->user->locality))
                                            <span>{{$tail->user->school}}</span>
                                        @endif
                                    @else

                                        @if(in_array($key, [0, 3, 4, 7]))
                                           @if($tail->author->avatar)
                                                <img src="{{ asset('storage/images/'.$tail->author->avatar) }}" alt="">
                                           @endif
                                        @endif
                                        <div class="author-name">
                                            <p>{{$tail->author->name}}</p>
                                            @if(isset($tail->author->job))
                                                <span>{{$tail->author->job}}</span>
                                            @endif
                                        </div>

                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                        <div class="d-flex justify-content-center" style="width: 100%">
                            {{$tails->links("pagination::bootstrap-4")}}
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="kid-banner">
        <div class="container">
            <div class="banner col-xxl-12 col-xl-12 mr-5 col-lg-12">
                <div class="banner-text col-xxl-6 col-xl-6 col-lg-6">
                    <h2>Хьамсара бераш,</h2>
                    <h3>Ер оагlув шоана лаьрхlа я. </h3>
                    <p>Укхунга гӀолла редакце хьадайта мегаргда шоай йоазош:
                        фаьлгаш, дувцараш, байташ, сихаоаларгаш, дагардергаш, кроссвордаш,сурташ, иштта кхыдараш.
                    </p>
                    <span>Царех дикагӀдараш кепа теха хургда, журнала оагӀонаш тӀа.</span>
                </div>
                <div class="banner-image col-xxl-4 col-xl-4 col-lg-4">
                    <img src="img/kids.png" alt="Села1ад">
                </div>
                <div class="banner-btn col-xxl-2 col-xl-2 col-lg-2">
                    @if(Auth::check())
                        <button class="modal-banner-btn-button d-flex justify-content-end"><img src="{{asset('img/bannerArrow.png')}}" alt=""></button>
                    @else
                        <a class="d-flex justify-content-end" href="{{route('login')}}"><button class="d-flex justify-content-end modal-banner-btn-button"><img src="{{asset('img/bannerArrow.png')}}" alt=""></button></a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
