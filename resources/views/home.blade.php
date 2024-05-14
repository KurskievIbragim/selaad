@extends('layouts.home2')

@section('content')



    <section class="main">
        <div class="container">
            <div class="main-left col-xxl-2 col-xl-2 col-lg-2">
                <div class="kicash col-xxl-12 col-xl-12 col-lg-12">
                    <h2 tooltip="Пословицы">Кицаш</h2>
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

            <div class="maim-right col-xxl-10 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="top-tails col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tail-long tail col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-xs-12">
                        <div class="tail-img col-lg-7 col-md-7">
                            <img src="{{ asset('storage/images/'.$firstPost->image_main) }}" alt="tail2">
                        </div>
                        <div class="tail-body col-md-5">
                            <a href="{{route('tailSingle', $firstPost->id)}}"><h2>{{$firstPost->title}}</h2></a>
                            @if(isset($firstPost->lead))
                                <p>{{ mb_substr($firstPost->lead, 0, 120) }}...</p>
                            @endif

                            @if(isset($firstPost->author->name))
                                <div class="author">
                                    @if(isset($firstPost->author->avatar))
                                        <img src="{{ asset('storage/images/'.$firstPost->author->avatar) }}" alt="">
                                    @endif
                                    <div class="author-name">
                                        <p>{{$firstPost->author->name}}</p>
                                        @if(isset($firstPost->author->job))
                                            <span>{{$firstPost->author->job}}</span>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <div class="author">
                                    @if(isset($firstPost->user->avatar))
                                        <img src="{{ asset('storage/avatars/'.$firstPost->user->avatar) }}" alt="">
                                    @endif
                                    <div class="author-name">
                                        <p>{{$firstPost->user->name}}</p>
                                        @if(isset($firstPost->user->locality))
                                            <span>{{$firstPost->user->school}}</span>
                                        @endif
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="tail-short tail col-xxl-4 col-xl-4 col-lg-4">
                        <a href="{{route('tailSingle', $secondPost->id)}}"><h2>{{$secondPost->title}}</h2></a>
                        @if(isset($secondPost->lead))
                            <p>{{ mb_substr($secondPost->lead, 0, 100) }}...</p>
                        @endif
                        @if(isset($secondPost->author->name))
                            <div class="author">
                                @if(isset($secondPost->author->avatar))
                                    <img src="{{ asset('storage/images/'.$secondPost->author->avatar) }}" alt="">
                                @endif
                                <div class="author-name">
                                    <p>{{$secondPost->author->name}}</p>
                                    @if(isset($secondPost->author->job))
                                        <span>{{$secondPost->author->job}}</span>
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="author d-flex align-items-center">
                                @if(isset($secondPost->user->avatar))
                                    <img src="{{ asset('storage/avatars/'.$secondPost->user->avatar) }}" alt="">
                                @endif
                                <div class="author-name">
                                    <p>{{$secondPost->user->name}}</p>
                                    @if(isset($secondPost->user->locality))
                                        <span>{{$secondPost->user->school}}</span>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="slider col-xxl-12 col-xl-12 col-lg-12 col-md-12" id="asad">
                    <ul>

                        @foreach($knowRepublic as $republic)
                            <li class="active"><a href="{{route('republicSingle', $republic->id)}}">
                                    <h3>Бовза беза хьай мохк</h3>
                                    <img src="{{ asset('storage/'.$republic->image_main) }}" alt="">
                                    <div class="slider-text">
                                        <div>
                                            <h2>{{$republic->title}}</h2>
                                            <span>{{$republic->type}}</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        @endforeach

                    </ul>
                    <div class="controls">
                        <div class="control control_prev">&larr;</div>
                        <div class="control control_next">&rarr;</div>
                    </div>

                </div>

                <div class="bottom-tails">

                    <div class="tail-short tail col-xxl-4 col-xl-4 col-lg-4">
                        <a href="{{route('tailSingle', $thirdPost->id)}}"><h2>{{$thirdPost->title}}</h2></a>
                        @if(isset($thirdPost->lead))
                            <p>{{ mb_substr($thirdPost->lead, 0, 120) }}...</p>
                        @endif
                        @if(isset($thirdPost->author->name))
                            <div class="author">
                                @if(isset($thirdPost->author->avatar))
                                    <img src="{{ asset('storage/images/'.$thirdPost->author->avatar) }}" alt="">
                                @endif
                                <div class="author-name">
                                    <p>{{$thirdPost->author->name}}</p>
                                    @if(isset($thirdPost->author->job))
                                        <span>{{$thirdPost->author->job}}</span>
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="author d-flex align-items-center">
                                @if(isset($thirdPost->user->avatar))
                                    <img src="{{ asset('storage/avatars/'.$thirdPost->user->avatar) }}" alt="">
                                @endif
                                <div class="author-name">
                                    <p>{{$thirdPost->user->name}}</p>
                                    @if(isset($thirdPost->user->locality))
                                        <span>{{$thirdPost->user->school}}</span>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="tail-long tail col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                        <div class="tail-img col-lg-7 col-md-7">
                            <img src="{{ asset('storage/images/'.$fourPost->image_main) }}" alt="Tail 1">
                        </div>
                        <div class="tail-body col-md-5">
                            <a href="{{route('tailSingle', $fourPost->id)}}"><h2>{{$fourPost->title}}</h2></a>
                            @if(isset($fourPost->lead))
                                <p>{{ mb_substr($fourPost->lead, 0, 100) }}...</p>
                            @endif
                            @if(isset($fourPost->author->name))
                                <div class="author">
                                    @if(isset($fourPost->author->avatar))
                                        <img src="{{ asset('storage/images/'.$fourPost->author->avatar) }}" alt="">
                                    @endif
                                    <div class="author-name">
                                        <p>{{$fourPost->author->name}}</p>
                                        @if(isset($fourPost->author->job))
                                            <span>{{$fourPost->author->job}}</span>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <div class="author">
                                    @if($fourPost->user->avatar)
                                        <img src="{{ asset('storage/avatars/'.$fourPost->user->avatar) }}" alt="">
                                    @endif
                                    <div class="author-name">
                                        <p>{{$fourPost->user->name}}</p>
                                        @if(isset($fourPost->user->locality))
                                            <span>{{$fourPost->user->school}}</span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>

                <div class="bottom-kicash col-lg-12">
                    <div class="kicash col-lg-8">
                        <h2 tooltip="Пословицы">Кицаш</h2>
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

                    <div class="dictionary col-lg-4 d-flex flex-column justify-content-between">
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
            </div>
        </div>
    </section>


    <section class="poesy">
        <div class="container">
            <h2 tooltip='Стихи' class="poesy-section-title">Байташ</h2>

            <div class="poesy-items col-xxl-12 col-xl-12 col-md-12 col-sm-12">
                @foreach($poesy as $poesy)
                    <div class="poesy-item col-xxl-3 col-xl-3 col-md-12 col-lg-4 col-sm-12">
                        <div class="poesy-author">
                           @if(isset($poesy->author->avatar))
                                <div class="poesy-author-img"><img src="{{ asset('storage/images/'.$poesy->author->avatar) }}" alt=""></div>
                           @endif
                            <span>{{$poesy->author->name}}</span>
                        </div>
                        <div class="poesy-text">
                            <h2>{{$poesy->title}}</h2>
                            <div>
                                 <?php
                                    $poesyContent = strip_tags($poesy->lead, '<p>');
                                    $lines = explode('<p>', $poesyContent);
                                    $firstFourLines = implode('<p>', array_slice($lines, 0, 5));
                                    echo $firstFourLines;
                                     ?>
                                    <bold>...</bold>

                            </div>
                        </div>
                        <div class="read-more">
                            <button class="poesy-banner-btn-button" data-full-content="{{ $poesy->content }}" data-content="{{$poesy->title}}">Читать дальше</button>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="all-items">
                <a href="{{route('poesy')}}">
                    <button><span>Дерригнега хьажа</span> <img src="{{asset('img/Arrow 5.svg')}}" alt=""></button>
                </a>
            </div>
        </div>
    </section>

    <!-- <section class="kid-banner">
        <div class="container">
            <div class="banner col-xxl-12 col-xl-12 mr-5 col-lg-12">
                <div class="banner-text col-xxl-6 col-xl-6 col-lg-6">
                    <h2>Хьамсара бераш,</h2>
                    <h3>Ер оагlув шоана лаьрхӀа я. </h3>
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
    </section> -->


    <section class="videostudio">
        <div class="container">
            <h2 class="poesy-section-title">
                Видеостудия "СелаӀад"
            </h2>

            <div class="video-items row">
                @foreach($videos as $key => $video)
                    <div class="video col-sm">
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


            <div class="all-items">
                <a href="{{route('videos')}}">
                    <button><span>Дерригнега хьажа</span> <img src="{{asset('img/Arrow 5.svg')}}" alt=""></button>
                </a>
            </div>

        </div>
    </section>



    <section class="photos">
        <div class="container">
            <h2 style="width: 100%;" class="poesy-section-title">Сурташ</h2>
        @foreach($photos as $photo)
                    <div class="photo col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="kid-photo col-xxl-8 col-xl-8 col-lg-6 col-md-6">
                            <img src="{{ asset('storage/surtash/'.$photo->surtFile) }}"/>
                        </div>

                        <div class="photo-body col-xxl-4 col-xl-4 col-lg-6 col-md-5">
                            <h2>{{$photo->title}}</h2>
                            <p>{!! $photo->lead !!}</p>

                            <div class="author col-xxl-8 col-xl-8 col-lg-8">
                                <img src="{{asset('img/author3.png')}}" alt="">
                                <div class="author-name col-xxl-8 col-xl-8 col-lg-8 col-12">
                                    <p>{{$photo->user->name}}</p>
                                    <span>{{$photo->user->locality}}  {{$photo->user->school}}  йола ишкола {{$photo->user->class}} классера дешархо </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                    <div class="all-items">
                        <a href="{{route('surtash')}}">
                            <button><span>Дерригнега хьажа</span> <img src="{{asset('img/Arrow 5.svg')}}" alt=""></button>
                        </a>
                    </div>
        </div>
    </section>


    <section class="famous-people">
        <div class="container">
            <h2 class="poesy-section-title" tooltip="Известные люди">ГӀалгӀай сийдола нах</h2>
            <div class="peoples col-lg-12">
                @foreach($famousPeople as $people)
                    <div class="people col-lg-4">
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
            <div class="all-items">
                <a href="{{route('persons')}}">
                    <button><span>Дерригнега хьажа</span> <img src="{{asset('img/Arrow 5.svg')}}" alt=""></button>
                </a>
            </div>
        </div>
    </section>

    <!-- <section class="magazines">
        <div class="container">
            <div class="magazine-block d-flex justify-content-between col-xxl-12 col-xl-12 col-lg-12">
                <div class="magazines-text col-xxl-6 col-xl-6 col-lg-">
                    <h2>СелаӀад журналаш</h2>
                    <p>Деша къаьна а керда а журналаш</p>
                </div>
                <div class="magazine-images col-xxl-4 col-xl-4 col-lg-4">
                    <img src="{{asset('img/content/magazine1.svg')}}" alt="">
                    <img src="{{asset('img/content/magazine2.svg')}}" alt="">
                    <img src="{{asset('img/content/magazine3.svg')}}" alt="">
                </div>
                <div class="banner-btn d-flex justify-content-end col-xxl-2 col-xl-2 col-lg-2 col-sm-12">
                    <a class="d-flex flex-wrap" href="{{route('magazines')}}">
                        <button class="banner-btn-button d-flex justify-content-end">
                            <img src="{{asset('img/bannerArrow.png')}}" alt="">
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section> -->


@endsection
