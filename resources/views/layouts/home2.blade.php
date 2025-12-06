<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/197.png')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'}}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles2.css')}}">
    <link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet"/>
    <title>Села1ад</title>

    <style>
        @media (max-width: 576px)
         .container {
            max-width: unset !important;
        }
    </style>
</head>



<body>


<header>

    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{asset('img/logo.svg')}}" alt=""></a>
            <span>Детский журнал Республики Ингушетия</span>
        </div>

        <div class="header-nav">
            <ul>

                <li class="menu-item"><a href="{{route('story')}}">Дувцараш</a></li>
                <li class="menu-item"><a href="{{route('surtash')}}">Сурташ</a></li>
            @foreach($menuItems as $menu)
                    <li class="menu-item"><a @if(isset($menu['href']))href="{{$menu['href']}}" @endif @if(isset($menu['class'])) class="{{$menu['class']}}"@endif>{{$menu['title']}}</a></li>
                @endforeach
            </ul>

            <div class="search js--open-search">

            </div>

            <div class="burger-menu-mobile">
                <button class="burger-open burger-banner-btn-button">
                    <img src="{{asset('img/bars-solid.svg')}}" alt="">
                </button>
            </div>
            <a href="{{route('dashboard')}}">
                <div class="burger-menu">
                    @if(isset(\Illuminate\Support\Facades\Auth::user()->avatar))
                        <img src="{{ asset('storage/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar) }}" alt="" class="user-avatar-small">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                    @endif
                </div>
            </a>
        </div>
    </div>

</header>

<section class="search-bar search-form">
    <div class="container">
        <div class="search-main">
            <form action="{{route('homepageSearch')}}">
                @csrf
                <input type="text" placeholder="Введите чтобы найти рассказ, стих, пословицу или известного человека" class="typing-placeholder" name="homeSearch">
                <input type="submit" value="Найти"></input>
            </form>
        </div>
    </div>
</section>
@yield('content')

<footer>
    <div class="container">
        <div class="row-1 row">
            <div class="licensy">
                <a href="">Об издании</a>
                <a href="">Правила использования материалов</a>
                <a href="">Согласие на обработку персональных данных</a>
            </div>

            <div class="social-icons">
                <div>
                    <a href=""><img src="{{asset('img/icons/tg.svg')}}" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="{{asset('img/icons/vk.svg')}}" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="{{asset('img/icons/dzen.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="footer-line"><hr></div>
        <div class="row row-2">
            <div class="address">
                <p>
                    <span class="redactor">Главный редактор: Гагиева Мартина Магометовна</span>
                    <span class="jur-address">386100, Республика Ингушетия, г. Назрань, пр. Базоркина, 60</span>
                </p>

                <p class="contacts">
                    <span class="phone">8 (988) 121-78-91</span>
                    <span class="email">E-mail: serdalo@yandex.ru</span>
                </p>
            </div>

            <div class="logo">
                <div class="age-group d-flex justify-content-end">
                    <img src="{{asset('img/Group 406.svg')}}" alt="">
                </div>
                <img src="{{asset('img/logo.svg')}}" alt="">
            </div>
        </div>
        <div class="footer-line"><hr></div>
        <div class="row row-3">
            <p>Сетевое издание «СелаӀад» зарегистрировано Федеральной службой по надзору в сфере связи, информационных технологий и массовых коммуникаций (Роскомнадзор).</p>
            <p>Cвидетельство о регистрации СМИ: ЭЛ № ФС 77-78323 от 15.05.2020 г.
                Учредитель: Государственное автономное учреждение «Издательский дом «Сердало»
            </p>
        </div>
    </div>
</footer>

<div class="main-modal">
    <div class="overlay"></div>
    <div class="modal-container">
        <div class="modal-m">
            <div class="modal-top">
                <div><button class="close-modal-btn"><img src="{{asset('img/close.svg')}}" alt=""></button></div>
            </div>
            <div class="modal-logo">
                <img src="{{asset('img/logo.svg')}}" alt="Села1ад">
            </div>
            <div class="modal-user-inputs">
                <form method="POST" action="{{route('application')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" placeholder="user_id" @if(Auth::check()) value="{{auth()->user()->id}}" @endif name="user_id">
                    <input type="text" placeholder="Имя"  @if(Auth::check()) value="{{auth()->user()->name}}" @endif name="name">
                    <input type="hidden" placeholder="Email или номер телефона" @if(Auth::check()) value="{{auth()->user()->email}}" @endif name="email">
                    <div class="tabs">
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'Poesy')">Байт</button>
                            <button class="tablinks" onclick="openCity(event, 'Tail')">Фаьлг-дувцар</button>
                            <button class="tablinks" onclick="openCity(event, 'Kic')">Киц</button>
                            <button class="tablinks" onclick="openCity(event, 'Surt')">Сурт</button>
                            <input type="hidden" name="publication_type" id="publication_type" value="">
                        </div>

                        <!-- Tab content -->
                        <div id="Poesy" class="tabcontent">
                            <input type="text" placeholder="Заголовок стиха" name="user_poesy_title"/>
                            <textarea placeholder="Текст" name="user-poesy-text"></textarea>
                        </div>

                        <div id="Tail" class="tabcontent">
                            <input type="text" placeholder="Заголовок рассказа" name="user-tail-title"/>
                            <textarea placeholder="Текст" name="user-tail-text"></textarea>
                            <input type="file" placeholder="Текст" name="user_tail_file"/>
                        </div>

                        <div id="Kic" class="tabcontent">
                            <input type="text" placeholder="Заголовок пословицы" name="user-kic-title"/>
                            <textarea placeholder="Текст" name="user-kic-text"></textarea>
                        </div>

                        <div id="Surt" class="tabcontent">
                            <input type="text" placeholder="Описание фотографии" name="surtTitle"/>
                            <input type="file" placeholder="Ваш рисунок" name="surtFile"/>
                        </div>
                    </div>

                    <div class="div" id="user-locality">
                        <input type="text" placeholder="Населенный пункт" name="user_locality" @if(Auth::check()) value="{{auth()->user()->locality}}" @endif/>
                    </div>

                    <div class="div" id="user-school">
                        <input type="text" placeholder="Ваша школа" name="user_school" @if(Auth::check()) value='{{auth()->user()->school}}' @endif/>
                    </div>

                    <div class="div" id="user-class">
                        <input type="text" placeholder="Ваш класс" name="user_class" @if(Auth::check()) value="{{auth()->user()->class}}" @endif/>
                    </div>


                    <div class="modal-modal">
                        <button type="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="poesy-modal">
    <div class="overlay"></div>
    <div class="modal-container">
        <div class="modal-m">
            <div class="modal-top poesy-close-modal-btn">
                <div><button class=""><img src="{{asset('img/close.svg')}}" alt=""></button></div>
            </div>
            <div class="modal-logo">
                <img src="{{asset('img/logo.svg')}}" alt="Села1ад">
            </div>

            <div id="poesy-modal-title"></div>
                <h2 class="poesy-modal-title"></h2>
            <div class="poesy-modal-text" style="overflow: auto; width:100%; height:300px;">

            </div>
        </div>
    </div>
</div>

<div class="burger-modal">
    <div class="overlay"></div>
    <div class="modal-container">
        <div class="modal-m">
            <div class="modal-top">
                <div class="modal-logo">
                    <img src="{{asset('img/logo.svg')}}" alt="Села1ад">
                </div>
                <div><button class="burger-close-modal-btn"><img src="{{asset('img/close.svg')}}" alt=""></button></div>
            </div>

            <div class="burger-content">
                <ul>

                    <li class="menu-item"><a href="{{route('dashboard')}}">Мой профиль</a></li>
                    <li class="menu-item"><a href="{{route('story')}}">Дувцараш</a></li>
                    <li class="menu-item"><a href="{{route('surtash')}}">Сурташ</a></li>

                    @foreach($menuItems as $menu)
                        <li class="menu-item"><a href="{{$menu['href']}}">{{$menu['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/infinityScroll.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/menuHover.js')}}"></script>
<script src="{{asset('js/photoHover.js')}}"></script>
<script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>
<script>

    const colors = [
        '#0000fe',
        '#0ccdd1',
        '#ffff01',
        '#fe0000',
        '#01ff01',
        '#ff00fe',
        '#6e63bb'
    ]








    // Получаем элементы
    let poesyModalOpenBtn = document.querySelectorAll('.poesy-banner-btn-button'),
        poesyModalCloseBtn = document.querySelectorAll('.poesy-close-modal-btn'),
        modalBannerOpenBtn = document.querySelector('.modal-banner-btn-button'),
        modalCloseBtn = document.querySelector('.close-modal-btn'),
        modalTitle = document.querySelector('.poesy-modal-title'),
        modalText = document.querySelector('.poesy-modal-text'),
        mainModal = document.querySelector('.main-modal'),
        poesyModal = document.querySelector('.poesy-modal'),
        burgerModal = document.querySelector('.burger-modal');


    poesyModalOpenBtn.forEach((el) =>{
        el.addEventListener('click', function () {

            const title = this.getAttribute('data-content');
            const content = this.getAttribute('data-full-content');

            modalTitle.innerHTML = title;
            modalText.innerHTML = content;
            poesyModal.style.display = "flex";
        })
    })
    // Открытие и закрытие модального окна поэзии связи

    poesyModalCloseBtn.forEach((el) => {
        el.addEventListener('click', function () {
            poesyModal.style.display = "none";
        });
    });

    // Открытие и закрытие модального окна обратной связи
    modalBannerOpenBtn.addEventListener('click', function () {
        mainModal.style.display = "flex";
    });


    modalCloseBtn.addEventListener('click', function () {
        mainModal.style.display = "none";
    });




    // Добавляем плеер для видео
    var player = fluidPlayer('my-player1', {
        modules: {
            configureHls: (options) => {
                return options;
            },
            onBeforeInitHls: (hls) => {
            },
            onAfterInitHls: (hls) => {
            },
            configureDash: (options) => {
                return options;
            },
            onBeforeInitDash: (dash) => {
            },
            onAfterInitDash: (dash) => {
            }
        }
    });
    var player = fluidPlayer('my-player2', {
        modules: {
            configureHls: (options) => {
                return options;
            },
            onBeforeInitHls: (hls) => {
            },
            onAfterInitHls: (hls) => {
            },
            configureDash: (options) => {
                return options;
            },
            onBeforeInitDash: (dash) => {
            },
            onAfterInitDash: (dash) => {
            }
        }
    });
    var player = fluidPlayer('my-player3', {
        modules: {
            configureHls: (options) => {
                return options;
            },
            onBeforeInitHls: (hls) => {
            },
            onAfterInitHls: (hls) => {
            },
            configureDash: (options) => {
                return options;
            },
            onBeforeInitDash: (dash) => {
            },
            onAfterInitDash: (dash) => {
            }
        }
    });

    var player = fluidPlayer('my-player4', {
        modules: {
            configureHls: (options) => {
                return options;
            },
            onBeforeInitHls: (hls) => {
            },
            onAfterInitHls: (hls) => {
            },
            configureDash: (options) => {
                return options;
            },
            onBeforeInitDash: (dash) => {
            },
            onAfterInitDash: (dash) => {
            }
        }
    });

    var player = fluidPlayer('my-player5', {
        modules: {
            configureHls: (options) => {
                return options;
            },
            onBeforeInitHls: (hls) => {
            },
            onAfterInitHls: (hls) => {
            },
            configureDash: (options) => {
                return options;
            },
            onBeforeInitDash: (dash) => {
            },
            onAfterInitDash: (dash) => {
            }
        }
    });

    var player = fluidPlayer('my-player6', {
        modules: {
            configureHls: (options) => {
                return options;
            },
            onBeforeInitHls: (hls) => {
            },
            onAfterInitHls: (hls) => {
            },
            configureDash: (options) => {
                return options;
            },
            onBeforeInitDash: (dash) => {
            },
            onAfterInitDash: (dash) => {
            }
        }
    });

    var player = fluidPlayer('my-player7', {
        modules: {
            configureHls: (options) => {
                return options;
            },
            onBeforeInitHls: (hls) => {
            },
            onAfterInitHls: (hls) => {
            },
            configureDash: (options) => {
                return options;
            },
            onBeforeInitDash: (dash) => {
            },
            onAfterInitDash: (dash) => {
            }
        }
    });

    var player = fluidPlayer('my-player8', {
        modules: {
            configureHls: (options) => {
                return options;
            },
            onBeforeInitHls: (hls) => {
            },
            onAfterInitHls: (hls) => {
            },
            configureDash: (options) => {
                return options;
            },
            onBeforeInitDash: (dash) => {
            },
            onAfterInitDash: (dash) => {
            }
        }
    });

    var player = fluidPlayer('my-player9', {
        modules: {
            configureHls: (options) => {
                return options;
            },
            onBeforeInitHls: (hls) => {
            },
            onAfterInitHls: (hls) => {
            },
            configureDash: (options) => {
                return options;
            },
            onBeforeInitDash: (dash) => {
            },
            onAfterInitDash: (dash) => {
            }
        }
    });



    // Табы

    function openCity(event, tabName) {
        var i, tabcontent, tablinks;


        event.preventDefault();
        // Получаем все элементы с классом "tabcontent" и прячем их
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Устанавливаем стиль "active" для выбранного таба
        document.getElementById(tabName).style.display = "block";

        // Устанавливаем значение выбранного таба в скрытое поле "publication_type"
        document.getElementById("publication_type").value = tabName;

        // Выводим значение в консоль для отладки
        console.log("Значение publication_type: " + document.getElementById("publication_type").value);
    }







</script>
</body>
</html>
