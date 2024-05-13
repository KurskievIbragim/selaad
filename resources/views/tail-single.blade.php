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

                    <a href="{{route('dictionary')}}"><button class="nextIcon"><img src="{{asset('img/nextIcon.svg')}}" alt=""></button></a>
                </div>
            </div>

            <div class="main-right col-xxl-10 col-xl-10 col-lg-12 col-12">
                <div class="single-page-block col-12">
                    @if(isset($post->author->name))
                        <div class="single-item-image">
                            @if(isset($post->image_main))
                                <img src="{{ asset('storage/images/'.$post->image_main) }}" alt="">
                            @endif
                            <div class="author col-10">
                                @if($post->author->avatar)
                                    <img src="{{ asset('storage/images/'.$post->author->avatar) }}" alt="">
                                @endif
                                <div class="author-name">
                                    <p>{{$post->author->name}}</p>
                                    <span>{{$post->author->job}}</span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="single-item-image">
                            @if($post->image_main)
                                <img src="{{ asset('storage/images/'.$post->image_main) }}" alt="">
                            @endif
                            <div class="author col-10">
                                @if($post->user->avatar)
                                    <img src="{{ asset('storage/avatars/'.$post->user->avatar) }}" alt="">
                                @endif
                                <div class="author-name">
                                    <p>{{$post->user->name}}</p>
                                    <span>{{$post->user->job}}</span>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="single-item-text">
                        <h3>{{$post->category->title}}</h3>

                        <h2>{{$post->title}}</h2>

                        <div>
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
