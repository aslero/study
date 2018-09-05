@extends('layouts.template')

@section('content')
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


    @endsection