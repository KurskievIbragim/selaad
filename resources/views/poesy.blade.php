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

            <div class="main-right col-xxl-10 ">
                <h3 class="page-title">Байташ</h3>
                <div class="poesy-all">
                    @foreach($poesys as $poesy)
                        <div class="poesy-item col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="poesy-author">
                                @if(isset($poesy->author->avatar))
                                    <div class="poesy-author-img"><img
                                            src="{{ asset('storage/images/'.$poesy->author->avatar) }}" alt=""></div>
                                @endif <span>{{$poesy->author->name}}</span>
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
                                <button class="poesy-banner-btn-button" data-full-content="{{ $poesy->content }}"
                                        data-content="{{$poesy->title}}">Читать дальше
                                </button>
                            </div>
                        </div>
                    @endforeach

                        <div class="d-flex justify-content-center" style="width: 100%">
                            {{$poesys->links("pagination::bootstrap-4")}}
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
