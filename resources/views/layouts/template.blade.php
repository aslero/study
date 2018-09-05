<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/libs.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>
<body>

@yield('content')

<footer>
    <div class="container">
        <div class="data-logo">
            <a href="" class="logo">
                <img src="img/logo.png" alt="logo">
            </a>
            <p>StudyDream - принимая во внимание показатели успешности, перспективное планирование требует анализа инновационных методов управления процессами. Вот вам яркий пример</p>
        </div>
        <div class="data-item">
            <p class="title">Информация</p>
            <nav>
                <a href="">О нас</a>
                <a href="">Ученикам</a>
                <a href="">Родителям</a>
                <a href="">Преподавателям</a>
                <a href="">Реферальная программа</a>
                <a href="">Помоги нам стать лучше</a>
            </nav>
        </div>
    </div>
</footer>
<div id="form-popup" class="white-popup mfp-hide">
    <form class="ajax_form" action="http://rfgstroy.ru/" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><img src="img/login.png" alt="">Войти в личный кабинет</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="name" value="" placeholder="Электронная почта:">
                <input type="phone" name="phone" value="" placeholder="Пароль:">
                <button type="submit" class="btn-green">Войти в личный кабинет</button>
                <a href="" class="btn-blue">Восстановить пароль</a>
                <div class="item-soc">
                    <p>Или войдите через соц.сети:</p>
                    <ul>
                        <li><a href="" class="vk"></a></li>
                        <li><a href="" class="fb"></a></li>
                        <li><a href="" class="tw"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <p>Пароль введён неверно. Убедитесь, что использована верная раскладка клавиатуры и не зажата клавиша
                Caps Lock</p>
        </div>
    </form>
</div>
<div id="form-reg" class="white-popup mfp-hide">
    <form class="ajax_form" action="http://rfgstroy.ru/" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><img src="img/login.png" alt="">Зарегистрироваться</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="name" value="" placeholder="Электронная почта:">
                <input type="phone" name="phone" value="" placeholder="Пароль:">
                <input type="phone" name="phone" value="" placeholder="Подтвердить пароль:">
                <input type="phone" name="phone" value="" placeholder="Код приглашения (при наличии):">
                <button type="submit" class="btn-green">Зарегистрироваться</button>
            </div>
        </div>
        <div class="modal-footer">
            <p>Пароль введён неверно. Убедитесь, что использована верная раскладка клавиатуры и не зажата клавиша
                Caps Lock</p>
        </div>
    </form>
</div>
<div id="form-ads" class="white-popup mfp-hide">
    <form class="ajax_form" action="http://rfgstroy.ru/" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><img src="img/ads-icon.png" alt="">Присоединяйся к команде
                    лучших преподавателей</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="name" value="" placeholder="Имя:">
                <input type="phone" name="phone" value="" placeholder="Номер телефона:">
                <button type="submit" class="btn-green">Оставить заявку</button>
            </div>
        </div>
    </form>
</div>
<div id="form-call" class="white-popup mfp-hide">
    <form class="ajax_form" action="http://rfgstroy.ru/" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><img src="img/call-icon.png" alt="">Заказать обратный звонок</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="name" value="" placeholder="Имя:">
                <input type="phone" name="phone" value="" placeholder="Телефон:">
                <input type="phone" name="phone" value="" placeholder="E-mail:">
                <div class="checkbox-input">
                    <input type="checkbox" checked="" id="checkbox_1">
                    <label for="checkbox_1">Даю <a href="">согласие</a> на обработку персональных данных</label>
                </div>
                <button type="submit" class="btn-green">ЗАКАЗАТЬ ЗВОНОК</button>
            </div>
        </div>
    </form>
</div>
<a href="#form-call" class="popup-with-form call-btn"></a>
<div class="overlow-bg"></div>
<script src="{{ asset('js/libs.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
</body>
</html>