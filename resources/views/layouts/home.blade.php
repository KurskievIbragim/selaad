<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'}}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    <link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet"/>
    <title>Села1ад</title>

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
                    @foreach($menuItems as $menu)
                        <li class="menu-item"><a href="{{$menu['href']}}">{{$menu['title']}}</a></li>
                    @endforeach


                </ul>

                <div class="search js--open-search">

                </div>

                <a href="{{route('dashboard')}}">
                    <div class="burger-menu">
                        @if(isset(\Illuminate\Support\Facades\Auth::user()->avatar))
                            <img src="" alt="">
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        @endif
                    </div>
                </a>
            </div>
        </div>

    </header>
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
                        <span class="redactor">Главный редактор: Горчханов Б.Х.</span>
                        <span class="jur-address">386100, Республика Ингушетия, г. Назрань, пр. Базоркина, 60</span>
                    </p>

                    <p class="contacts">
                        <span class="phone">8 (8734) 77-10-85</span>
                        <span class="email">E-mail: info@serdalo.ru</span>
                    </p>
                </div>

                <div class="logo">
                    <img src="{{asset('img/logo.svg')}}" alt="">
                </div>
            </div>
            <div class="footer-line"><hr></div>
            <div class="row row-3">
                <p>Сетевое издание «СелаӀад» зарегистрировано Федеральной службой по надзору в сфере связи, информационных технологий и массовых коммуникаций (Роскомнадзор).</p>
                <p>Cвидетельство о регистрации СМИ: ЭЛ № ФС 77-78323 от 15.05.2020 г.
                    Учредитель: Государственное автономное учреждение «Редакция общенациональной газеты «Сердало»
                </p>
            </div>
        </div>
    </footer>

    <div class="main-modal">
        <div class="overlay"></div>
        <div class="modal-container">
            <div class="modal">
                <div class="modal-top">
                    <div><button class="close-modal-btn">x</button></div>
                </div>
                <div class="modal-logo">
                    <img src="{{asset('img/logo.svg')}}" alt="Села1ад">
                </div>
                <div class="modal-user-inputs">
                    <form>
                        <input type="text" placeholder="Имя">
                        <input type="text" placeholder="Фамилия">
                        <input type="text" placeholder="Email или номер телефона">
                        <div class="tabs">
                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'Poesy')">Стих</button>
                                <button class="tablinks" onclick="openCity(event, 'Tail')">Рассказ</button>
                                <button class="tablinks" onclick="openCity(event, 'Kic')">Киц</button>
                            </div>

                            <!-- Tab content -->
                            <div id="Poesy" class="tabcontent">
                                <input type="text" placeholder="Заголовок стиха" name="user-poesy-title"/>
                                <textarea placeholder="Текст" name="user-poesy-text"></textarea>
                                <input type="file" placeholder="Текст" name="user-poesy-file"/>
                            </div>

                            <div id="Tail" class="tabcontent">
                                <input type="text" placeholder="Заголовок рассказа" name="user-poesy-title"/>
                                <textarea placeholder="Текст" name="user-tail-text"></textarea>
                                <input type="file" placeholder="Текст" name="user-poesy-file"/>
                            </div>

                            <div id="Kic" class="tabcontent">
                                <input type="text" placeholder="Заголовок пословицы" name="user-poesy-title"/>
                                <textarea placeholder="Текст" name="user-kic-text"></textarea>
                            </div>
                        </div>
                        <div class="modal-modal">
                            <button>Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/slider.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
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
    let menuItems = document.getElementsByClassName('menu-item'),
        modalOpenBtn = document.querySelector('.banner-btn-button'),
        modalCloseBtn = document.querySelector('.close-modal-btn'),
        mainModal = document.querySelector('.main-modal');


    // Добавляем обработчики событий для каждого элемента
    for (let i = 0; i < menuItems.length; i++) {
        menuItems[i].addEventListener('mouseover', function() {
            this.style.borderBottom = '2px solid ' + colors[i % colors.length];
        });

        menuItems[i].addEventListener('mouseout', function() {
            this.style.borderBottom = '';
        });
    }

    // Открытие и закрытие модального окна обратной связи
    modalOpenBtn.addEventListener('click', function () {
        mainModal.style.display = "flex";
    })

    modalCloseBtn.addEventListener('click', function () {
        mainModal.style.display = "none";
    })

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



     // Табы

    function openCity(evt, cityName) {
        event.preventDefault();
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }





</script>
</body>
</html>
