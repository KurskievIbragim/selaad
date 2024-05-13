<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">

    <div class="container">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center  selection:bg-red-500 selection:text-white">
            <div>
                <h2>Сайт журанала Села1ад</h2>
                <p>Команда проекта: Ибрагим Курскиев, Беслан Шамаев</p>
                <span>Статус: в работе</span>
            </div>
        </div>

    </div>

        <!-- Модальное окно -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Заголовок модального окна</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data" action="{{route('application')}}">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Имя</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Введите имя" name="name">
                            </div>
                            <div class="form-group">
                                <label for="inputLastName">Фамилия</label>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Введите фамилию" name="last_name">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email или номер телефона</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Введите email или номер телефона" name="email">
                            </div>
                            <div class="form-group">
                                <label for="inputPublicationType">Тип публикации</label>
                                <select class="form-control" id="inputPublicationType" name="publication_type">
                                    <option value="0" class="btn-success">Выберите тип публикации</option>
                                    <option value="1">Стих</option>
                                    <option value="2">Рассказ</option>
                                    <option value="3">Пословица</option>
                                </select>
                            </div>
                            <div class="form-group" id="additionalFields1" style="display: none;">
                                <label for="inputTitle">Заголовок</label>
                                <input type="text" class="form-control" id="inputTitle" placeholder="Введите заголовок" name="title">
                            </div>
                            <div class="form-group" id="additionalFields2" style="display: none;">
                                <label for="inputText">Текст</label>
                                <textarea class="form-control" id="inputText" rows="3" placeholder="Введите текст" name="text"></textarea>
                            </div>
                            <div class="form-group" id="additionalFields3" style="display: none;">
                                <label for="inputPhoto">Фото</label>
                                <input type="file" class="form-control-file" id="inputPhoto" name="photo">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                <button type="submit" class="btn btn-success">Сохранить</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script>
            // JavaScript код для отображения дополнительных полей при выборе типа публикации
            var publicationType = document.getElementById("inputPublicationType");
            var additionalFields1 = document.getElementById("additionalFields1");
            var additionalFields2 = document.getElementById("additionalFields2");
            var additionalFields3 = document.getElementById("additionalFields3");

            publicationType.addEventListener("change", function() {
                if (publicationType.value === "0") {
                    additionalFields1.style.display = "none";
                    additionalFields2.style.display = "none";
                    additionalFields3.style.display = "none";
                } else if (publicationType.value === "1") { // Стих
                    additionalFields1.style.display = "block";
                    additionalFields2.style.display = "block";
                    additionalFields3.style.display = "block";
                } else if (publicationType.value === "2") { // Рассказ
                    additionalFields1.style.display = "block";
                    additionalFields2.style.display = "block";
                    additionalFields3.style.display = "block";
                } else if (publicationType.value === "3") { // Пословица
                    additionalFields1.style.display = "block";
                    additionalFields2.style.display = "none";
                    additionalFields3.style.display = "none";
                }
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
