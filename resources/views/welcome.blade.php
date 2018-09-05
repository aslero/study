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
<header class="home">
    <div class="top-header">
        <div class="container grid">
            <a href="index.html" class="logo">
                <img src="img/logo.png" alt="logo">
            </a>
            <div class="data-btn">
                <span class="close-btn"></span>
                <a href="#form-popup" class="popup-with-form btn btn-green">Личный кабинет</a>
                <a href="#form-reg" class="popup-with-form btn btn-bgreen">Регистрация</a>
                <a href="#form-ads" class="popup-with-form link-btn">Стать преподавателем</a>
            </div>
            <div class="mobile-data">
                <div class="mobile-user-btn"></div>
                <div class="mobilem" data-label="Меню" data-label-close="Закрыть">
                    <span class="_line __1"></span>
                    <span class="_line __2"></span>
                    <span class="_line __3"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <nav>
                <a href="" class="active">Главная</a>
                <a href="">О нас</a>
                <a href="">Родителям</a>
                <a href="">Зарабатывай с нами</a>
            </nav>
            <div class="data-info">
                <a href="" class="email">info@studystream.ru</a>
                <ul>
                    <li><a href="" class="vk"></a></li>
                    <li><a href="" class="fb"></a></li>
                    <li><a href="" class="in"></a></li>
                    <li><a href="" class="od"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section class="slider-box">
    <div class="slider single-item">
        <div class="item" style="background-image: url(img/slider1.png);">
            <div class="container">
                <div class="data-box">
                    <p class="stitle">Образование не выходя из дома</p>
                    <p class="text">Все наши занятия проводятся в режиме онлайн. Ученикам не нужно тратить драгоценное время на поездки к преподавателям, а преподавателям – на поездки к ученикам.</p>
                    <a href="" class="btn-green">Узнать подробнее</a>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url(img/slider1.png);">
            <div class="container">
                <div class="data-box">
                    <p class="stitle">Образование не выходя из дома</p>
                    <p class="text">Все наши занятия проводятся в режиме онлайн. Ученикам не нужно тратить драгоценное время на поездки к преподавателям, а преподавателям – на поездки к ученикам.</p>
                    <a href="" class="btn-green">Узнать подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ststic">
    <div class="container">
        <div class="item">
            <img src="img/item1.png">
            <span>200+</span>
            <p>учеников</p>
        </div>
        <div class="item">
            <img src="img/item2.png">
            <span>50+</span>
            <p>преподавателей</p>
        </div>
        <div class="item">
            <img src="img/item3.png">
            <span>5+</span>
            <p>лет опыта работы</p>
        </div>
    </div>
</section>
<section class="info-img">
    <div class="container">
        <div class="data-text">
            <h2>Нашими преподавателями являются:</h2>
            <ul>
                <li>Составителями заданий ОГЭ и ЕГЭ</li>
                <li>Составителями заданий для Олимпиад школьников и членами жюри таких Олимпиад</li>
                <li>Создателями авторских курсов и методик </li>
                <li>Преподавателями групповых занятий лучших центров для подготовки г. Москвы</li>
                <li>реподавателями с большим и, главное, эффективным опытом подготовки к ЕГЭ и ОГЭ.</li>
            </ul>
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container grid">
        <p class="stitle">Отзывы</p>
        <div class="item">
            <div class="data-header">
                <img src="img/rev1.png">
                <div class="info">
                    <p class="name">Левашева Наталья Михайловна</p>
                    <span class="city">г.Москва</span>
                </div>
            </div>
            <div class="data-footer">
                <p>С другой стороны укрепление и развитие структуры представляет собой интересный эксперимент проверки дальнейших направлений развития. С другой стороны начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации соответствующий условий активизации. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет оценить значение систем массового участия.</p>
            </div>
        </div>
        <div class="item">
            <div class="data-header">
                <img src="img/rev2.png">
                <div class="info">
                    <p class="name">Алексей Пригожный</p>
                    <span class="city">МГУ, г.Москва</span>
                </div>
            </div>
            <div class="data-footer">
                <p>С другой стороны укрепление и развитие структуры представляет собой интересный эксперимент проверки дальнейших направлений развития. С другой стороны начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации соответствующий условий активизации. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет оценить значение систем массового участия.</p>
            </div>
        </div>
    </div>
</section>
<section class="registration-box">
    <div class="container">
        <div class="data-img"></div>
        <form action="">
            <h2 class="stitle">Начать учебу</h2>
            <input type="text" placeholder="Имя:">
            <input type="text" placeholder="Телефон:">
            <input type="text" placeholder="E-mail:">
            <div class="checkbox-input">
                <input type="checkbox" checked="" id="checkbox_1">
                <label for="checkbox_1">Нажимая на кнопку «Регистрация», я подтверждаю свое <a href="">согласие</a> на обработку персональных данных</label>
            </div>
            <button class="btn-green">ЗАРЕГИСТРИРОВАТЬСЯ</button>
        </form>
    </div>
</section>
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