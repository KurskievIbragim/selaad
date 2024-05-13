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

                    <a href="{{route('dictionary')}}"><button class="nextIcon"><img src="{{asset('img/nextIcon.svg')}}" alt=""></button></a>
                </div>
            </div>

            <div class="main-right col-xxl-10 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="tails-all col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex flex-wrap">
                        <div class="republic col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-12">
                            <div class="single-page-block single-republic col-12">
                                <div class="single-item-image">
                                    <div class="slider col-xxl-12 col-xl-12 col-lg-12 col-md-12" id="asad">
                                        <ul>

                                            @foreach($images as $image)
                                                <li class="active"><a href="">
                                                        <img src="{{ asset('storage/'.$image) }}" alt="">
                                                    </a>
                                                </li>

                                            @endforeach

                                        </ul>
                                        <div class="controls">
                                            <div class="control control_prev">&larr;</div>
                                            <div class="control control_next">&rarr;</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="single-item-text">
                                    <div class="republic-title">
                                        <h2>{{$republic->title}}</h2>
                                        <h3>{{$republic->type}}</h3>
                                    </div>

                                    <div>
                                        {!! $republic->content !!}
                                    </div>
                                </div>
                            </div>
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
                    <img src="{{asset('img/kids.png')}}" alt="Села1ад">
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
