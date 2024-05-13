@extends('layouts.home2')

@section('content')
    <section class="main">
        <div class="container">
            <div class="main-left col-xxl-2 col-xl-2 col-lg-2">

                <div class="dictionary kicash-dict">
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

            <div class="main-right col-xxl-10">
                <h3 class="page-title">Кицаш</h3>
                <div class="kicash-all">
                    @foreach($kicash as $kica)
                        <div class="kica">
                            <p>{{$kica->title}}</p>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-2">
                    {{$kicash->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </section>
@endsection
