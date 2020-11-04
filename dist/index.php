<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="SHORTCUT ICON" href="img/favicon.ico" type="image/x-icon">
    <title>Grill Place</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Pacifico&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <header class="header" style="background-image: url(img/header-bg.jpg);">
                <div class="header__container-info">
                    <div class="container">
                        <div class="header__info">
                            <ul class="header__info-links">
                                <li>
                                    <a class="icon-paper-plane" href="https://telegram.org/"></a>
                                </li>
                                <li>
                                    <a class="icon-vk" href="https://vk.com/"></a>
                                </li>
                                <li>
                                    <a class="icon-facebook" href="https://www.facebook.com/"></a>
                                </li>
                                <li>
                                    <a class="icon-twitter" href="https://twitter.com/"></a>
                                </li>
                                <li>
                                    <a class="icon-youtube-square" href="https://www.youtube.com/"></a>
                                </li>
                                <li>
                                    <a class="icon-instagram" href="https://www.instagram.com/"></a>
                                </li>

                                <li>
                                    <a class="icon-whatsapp" href="https://www.whatsapp.com/"></a>
                                </li>
                            </ul>
                            <div class="header__info-contact">
                                <a class="icon-phone" href="tel:+790315121121">+790315121121</a>
                            </div>
                            <div class="header__triangle-logo" style="background-image: url(img/triangle.png);">
                                <p>Grill place</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__container-menu">
                    <div class="container">
                        <nav class="header__menu">
                            <ul class="header__menu-links">
                                <li>
                                    <a href="#about">Наши преимущества</a>
                                </li>
                                <li>
                                    <a href="#dishes">Блюда от шефа</a>
                                </li>
                                <li>
                                    <a href="#menu">Меню</a>
                                </li>
                                <li>
                                    <a class="open-popup-link" href="#reserve-popup">Заказ столика</a>
                                </li>
                                <li>
                                    <a href="#footer">Как нас найти</a>
                                </li>
                            </ul>
                            <div class="header__menu-btn">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="header__big-block">
                    <div class="header__text-wrapper">
                        <h1 class="header__title">Grill Place</h1>
                        <p class="header__text">Ресторан американской кухни, отменные стейки на открытом огне из
                            отборного фермерского мяса, запеченная рыба на гриле, самодельные соуса на основе
                            классических рецептов американского барбекю не оставят вас равнодушными!</p>
                        <a href="#recipes">Подробнее</a>
                    </div>
                </div>
            </header>
            <section id="about" class="about" style="background-image: url(img/paper-bg.jpg);">

                <div class="container">
                    <div class="about__inner">
                        <div class="about__interior-img"
                            style="background-image: url(img/about-steak.jpg);"></div>
                        <div class="text-block">
                            <div class="text-block__title">
                                Только лучшее!
                            </div>
                            <div class="text-block__text">
                                Наша гордость - это наши стейки. Готовят их на уникальном испанском мангале — Josper. На
                                нем можно приготовить самые вкусные блюда из любых продуктов, а мясо получается особенно
                                великолепным. Кроме того, Вы можете насладиться вкусом мяса, приготовленного
                                методом су-вид (способ точного низкотемпературного приготовления, дающий непревзойденные
                                результаты и позволяющий блюду раскрыться с неожиданной стороны).
                            </div>
                            <a href="#about-popup" class="open-popup-link">Подробнее</a>
                        </div>
                    </div>
                </div>

            </section>
            <section class="recipes" id="recipes" style="background-image: url(img/recipes-bg.jpg);">

                <div class="container">
                    <div class="recipes__inner">
                        <div class="text-block" style="background-image: url(img/paper-bg.jpg);">
                            <div class="text-block__title">
                                У нас вкусно!
                            </div>
                            <div class="text-block__text">
                                Мы предлагаем вам проверенные годами рецепты американского барбекю! Каждый из них
                                раскрывает и дополняет вкус превосходного фермерского мяса. Мы без зазрения совести
                                можем утверждать, что наши стейки будут вам по вкусу, качество гарантирует наш
                                шеф-повар,
                                который профессионально занимался своим любимым делом в штате Оклахома на протяжении 14
                                лет!
                            </div>
                            <a href="#recipes-popup" class="open-popup-link">Подробнее</a>
                        </div>
                        <img src="img/recipes-steak.jpg" alt="">
                    </div>
                </div>

            </section>
            <section class="dishes" id="dishes" style="background-image: url(img/paper-bg.jpg);">
                <div class="container">
                    <div class="dishes__title">
                        Попробуйте!
                    </div>
                    <div class="dishes__subtitle">
                        Блюда от шеф-повара!
                    </div>
                    <div class="dishes__content">
                        <div class="dishes__content-row">
                            <div class="dishes__content-item"
                                style="background-image: url(img/dishes-content/dish-1.jpg);">
                                <div class="dishes__item-info">
                                    <div class="item-info__name">
                                        Запеченый палтус с овощами
                                    </div>
                                    <div class="item-info__price">
                                        620 р
                                    </div>
                                    <a href="#dish-popup-1" class="open-popup-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="dishes__content-item"
                                style="background-image: url(img/dishes-content/dish-2.jpg);">
                                <div class="dishes__item-info">
                                    <div class="item-info__name">
                                        Запеченная речная форель с овощами
                                    </div>
                                    <div class="item-info__price">
                                        710 р
                                    </div>
                                    <a href="#dish-popup-2" class="open-popup-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="dishes__content-item"
                                style="background-image: url(img/dishes-content/dish-3.jpg);">
                                <div class="dishes__item-info">
                                    <div class="item-info__name">
                                        Свинина well-done с сливочногрибным соусом
                                    </div>
                                    <div class="item-info__price">
                                        320 р
                                    </div>
                                    <a href="#dish-popup-3" class="open-popup-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="dishes__content-item"
                                style="background-image: url(img/dishes-content/dish-4.jpg);">
                                <div class="dishes__item-info">
                                    <div class="item-info__name">
                                        Говядина medium-rare с овощами гриль
                                    </div>
                                    <div class="item-info__price">
                                        320 р
                                    </div>
                                    <a href="#dish-popup-4" class="open-popup-link">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="dishes__content-row">
                            <div class="dishes__content-item"
                                style="background-image: url(img/dishes-content/dish-5.jpg);">
                                <div class="dishes__item-info">
                                    <div class="item-info__name">
                                        Говядина в соусе барбекю от шефа
                                    </div>
                                    <div class="item-info__price">
                                        360 р
                                    </div>
                                    <a href="#dish-popup-5" class="open-popup-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="dishes__content-item"
                                style="background-image: url(img/dishes-content/dish-6.jpg);">
                                <div class="dishes__item-info">
                                    <div class="item-info__name">
                                        Отбивная говядина в сливочноягодном соусе
                                    </div>
                                    <div class="item-info__price">
                                        380 р
                                    </div>
                                    <a href="#dish-popup-6" class="open-popup-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="dishes__content-item"
                                style="background-image: url(img/dishes-content/dish-7.jpg);">
                                <div class="dishes__item-info">
                                    <div class="item-info__name">
                                        Сочный стейк с нашим секретным соусом
                                    </div>
                                    <div class="item-info__price">
                                        420 р
                                    </div>
                                    <a href="#dish-popup-7" class="open-popup-link">Подробнее</a>
                                </div>
                            </div>
                            <div class="dishes__content-item"
                                style="background-image: url(img/dishes-content/dish-8.jpg);">
                                <div class="dishes__item-info">
                                    <div class="item-info__name">
                                        Говядина на гриле с особыми приправами
                                    </div>
                                    <div class="item-info__price">
                                        320 р
                                    </div>
                                    <a href="#dish-popup-8" class="open-popup-link">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="menu" id="menu" style="background-image: url(img/menu-content/menu-bg.jpg);">
                <div class="container">
                    <div class="menu__title">
                        Наше меню
                    </div>
                    <div class="menu__subtitle">
                        Популярные заказы
                    </div>
                    <div class="menu__slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="menu__slider-item swiper-slide">
                                <img src="img/menu-content/drinks.jpg" alt="">
                                <div class="menu__item-text" style="background-image: url(img/paper-bg.jpg);">
                                    <div class="menu__text-title">
                                        Напитки
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Сидр вишневый
                                        </div>
                                        <div class="menu__text-price">
                                            300р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Крафтовое темное пиво: Grand Tree
                                        </div>
                                        <div class="menu__text-price">
                                            260р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Темное пиво: Jack Mew
                                        </div>
                                        <div class="menu__text-price">
                                            240р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Светлое пиво: Grand Canyon
                                        </div>
                                        <div class="menu__text-price">
                                            240р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Классическая кола
                                        </div>
                                        <div class="menu__text-price">
                                            100р
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__slider-item swiper-slide">
                                <img src="img/menu-content/steaks.jpg" alt="">
                                <div class="menu__item-text" style="background-image: url(img/paper-bg.jpg);">
                                    <div class="menu__text-title">
                                        Стейки и рыба
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Запеченый палтус с овощами
                                        </div>
                                        <div class="menu__text-price">
                                            620р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Говядина в соусе барбекю от шефа
                                        </div>
                                        <div class="menu__text-price">
                                            360р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Филе Миньон
                                        </div>
                                        <div class="menu__text-price">
                                            400р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Стейк "Рибай"
                                        </div>
                                        <div class="menu__text-price">
                                            640р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Стейк из сёмги
                                        </div>
                                        <div class="menu__text-price">
                                            720р
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__slider-item swiper-slide">
                                <img src="img/menu-content/soup.jpg" alt="">
                                <div class="menu__item-text" style="background-image: url(img/paper-bg.jpg);">
                                    <div class="menu__text-title">
                                        Супы
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Тыквенный суп с имбирем
                                        </div>
                                        <div class="menu__text-price">
                                            280р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Гороховый суп с беконом
                                        </div>
                                        <div class="menu__text-price">
                                            320р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Молочный суп из трески с сельдереем и перцем
                                        </div>
                                        <div class="menu__text-price">
                                            420р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Классический суп чаудер
                                        </div>
                                        <div class="menu__text-price">
                                            340р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Томатный суп с гренками
                                        </div>
                                        <div class="menu__text-price">
                                            240р
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__slider-item swiper-slide">
                                <img src="img/menu-content/salat.jpg" alt="">
                                <div class="menu__item-text" style="background-image: url(img/paper-bg.jpg);">
                                    <div class="menu__text-title">
                                        Холодные закуски
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Капустный салат "Коул-сло" с сельдереем
                                        </div>
                                        <div class="menu__text-price">
                                            220р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Кобб-салат с курицей
                                        </div>
                                        <div class="menu__text-price">
                                            370р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Салат с авокадо и белой фасолью
                                        </div>
                                        <div class="menu__text-price">
                                            320р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Картофельный салат "Ранчо"
                                        </div>
                                        <div class="menu__text-price">
                                            350р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Тар-тар из лосося-гриль
                                        </div>
                                        <div class="menu__text-price">
                                            540р
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__slider-item swiper-slide">
                                <img src="img/menu-content/dessert.jpg" alt="">
                                <div class="menu__item-text" style="background-image: url(img/paper-bg.jpg);">
                                    <div class="menu__text-title">
                                        Десерты
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Манговый чизкейк
                                        </div>
                                        <div class="menu__text-price">
                                            420р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Яблочный штрудель
                                        </div>
                                        <div class="menu__text-price">
                                            420р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Тирамису
                                        </div>
                                        <div class="menu__text-price">
                                            380р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Ирландское ежевичное мороженное
                                        </div>
                                        <div class="menu__text-price">
                                            360р
                                        </div>
                                    </div>
                                    <div class="menu__text-dish">
                                        <div class="menu__text-name">
                                            Крем-брюле со свежими ягодами
                                        </div>
                                        <div class="menu__text-price">
                                            540р
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>



        </div>
        <footer class="footer" id="footer" style="background-image: url(img/footer-bg.jpg);">
            <div class="container">
                <div class="footer__title">
                    Ждем вас в гости!
                </div>
                <div class="footer__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.1253942514745!2d82.93978006149169!3d55.02709713977867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe42d21f47585%3A0xa0e527e67af11f9a!2z0KLQoNCmINCQ0YPRgNCw!5e0!3m2!1sru!2sru!4v1602344456940!5m2!1sru!2sru"
                        width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="footer__content">
                    <div class="footer__address">
                        <div class="footer__content-title address__title">
                            Нас легко найти
                        </div>
                        <p>Новосибирск, Военная ул. 5, ТРЦ Аура, 1 этаж (вход со стороны Ипподромской ул.) 630099.</p>
                        <a href="tel:+790315121121">Телефон: +790315121121</a>
                        <a href="mailto:grillplace@mail.ru">Электронная почта: grillplace@mail.ru</a>
                    </div>
                    <div class="footer__hours">
                        <div class="footer__content-title hours__title">
                            Часы работы
                        </div>
                        <div class="hours__subtitile">Понедельник - пятница</div>
                        <p>8:00 - 10:00(Завтрак)</p>
                        <p>11:00 - 22:00</p>
                        
                        <div class="hours__subtitile">Суббота - воскресение</div>
                        <p>10:00 - 24:00</p>
                    </div>
                    <div class="footer__form">
                        <div class="footer__content-title form__title">
                            Напишите нам
                        </div>
                        <form id="footer__form" action="">
                            <input type="text" name="mail-name" placeholder="Ваше имя" required autocomplete="off">
                            <input type="text" placeholder="Электронная почта" required name="mail-email"
                                autocomplete="off">
                            <input type="tel" placeholder="Номер телефона" required name="mail-tel" 
                            pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                            title="Введите корректный номера телефона(может начинаться с +7,8,+ и код города, с пробелами и скобками или без них)" 
                            autocomplete="off">
                            <textarea placeholder="Сообщение" required name="mail-text" autocomplete="off"></textarea>
                            <button type="submit" id="footer__form-button">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <div id="dish-popup-1" class="dish-popup mfp-hide mfp-fade"
        style="background-image: url(img/dishes-content/dish-1.jpg);">
        <div class="dish-popup__text">
            <h1>Запеченый палтус с овощами.</h1>
            <p>Филе свежайшего палтуса замаринованное лично шеф-поваром, запеченное в фольге с разнообразными свежими
                овощами и лимоном. На первый взгляд совершенно простое блюдо раскроется для вас с новой стороны!</p>
        </div>
    </div>

    <div id="dish-popup-2" class="dish-popup mfp-hide mfp-fade"
        style="background-image: url(img/dishes-content/dish-2.jpg);">
        <div class="dish-popup__text">
            <h1>Запеченная речная форель с овощами.</h1>
            <p>Свежая речная форель с лимонным соком, запеченная на углях. Подается с помидорами и болгарским перцем
                приготовленными на гриле, а так же свежей спаржой обжаренной в чеснонолимоном масле.</p>
        </div>
    </div>

    <div id="dish-popup-3" class="dish-popup mfp-hide mfp-fade"
        style="background-image: url(img/dishes-content/dish-3.jpg);">
        <div class="dish-popup__text">
            <h1> Свинина well-done с сливочногрибным соусом.</h1>
            <p>Свиная шейка приготовленная well-done, раскрывает свой вкус в сочетании с нашим сливочногрибным соусом,
                подается с запеченным картофелем и овощами гриль.</p>
        </div>
    </div>
    <div id="dish-popup-4" class="dish-popup mfp-hide mfp-fade"
        style="background-image: url(img/dishes-content/dish-4.jpg);">
        <div class="dish-popup__text">
            <h1> Говядина medium-rare с овощами гриль.</h1>
            <p>Отборная фермерская говядина, приготовленная medium-rare, что позволяет полностью насладиться вкусом
                качественного мяса приготовленного профессионально, подается с овощами гриль и зеленью.</p>
        </div>
    </div>
    <div id="dish-popup-5" class="dish-popup mfp-hide mfp-fade"
        style="background-image: url(img/dishes-content/dish-5.jpg);">
        <div class="dish-popup__text">
            <h1>Говядина в соусе барбекю от шефа.</h1>
            <p>Маринованная фермерская говядина, приготоваленная по классическим рецептам барбекю, но с особым соусом от
                нашего шеф-повара! Подается с салатом из свежих овощей и заправкой к нему.</p>
        </div>
    </div>
    <div id="dish-popup-6" class="dish-popup mfp-hide mfp-fade"
        style="background-image: url(img/dishes-content/dish-6.jpg);">
        <div class="dish-popup__text">
            <h1>Отбивная говядина в сливочноягодном соусе.</h1>
            <p>Отбивная из говядины приготовленная well-done, подается с овощами гриль и сливочным соусом с добавлением
                черники и обжаренного лука. Смелый вкус для людей открытых новому!</p>
        </div>
    </div>
    <div id="dish-popup-7" class="dish-popup mfp-hide mfp-fade"
        style="background-image: url(img/dishes-content/dish-7.jpg);">
        <div class="dish-popup__text">
            <h1> Сочный стейк с нашим секретным соусом.</h1>
            <p>Говяжий стейк приготовленный medim-rare, подается с запеченным картофелем, обжаренной спаржой и нашим
                секретным соусом на основе карри от шеф-повара!</p>
        </div>
    </div>
    <div id="dish-popup-8" class="dish-popup mfp-hide mfp-fade"
        style="background-image: url(img/dishes-content/dish-8.jpg);">
        <div class="dish-popup__text">
            <h1>Говядина на гриле с особыми приправами.</h1>
            <p>Говяжая вырезка приготовленная на углях со смесью классических приправ американского барбекю, но с ноткой
                Италии! Подается с овощами гриль.</p>
        </div>
    </div>
    <div id="about-popup" class="about-popup mfp-hide mfp-fade">
        <img class="about-popup__img" src="img/about-josper.jpg"></img>
        <div class="about-popup__text">
            <p>Josper — это элегантное сочетание печи и гриля типа барбекю в одной машине. В качестве топлива
                используется 100% древесный уголь. Уникальная закрытая конструкция печи-мангала. Разные уровни прожарки.
                Универсальный и прочный.</p>
            <p>Так же наш гриль позволяет готовить методом су-вид! Готовка в вакууме — метод приготовления пищи, при
                котором мясо или овощи помещаются в пластиковый пакет с откачанным воздухом и медленно готовятся при
                сравнительно низкой и точно контролируемой
                температуре, обычно в водяной бане. Какие особенности связаны с приготовлением продуктов в су-виде?
                Во-первых, это достижение точно той степени приготовления продукта, которая вам нужна. Результатом будет
                гарантированно сочное и нежное
                мясо, не потерявшее в процессе приготовления ни соков, ни вкуса. Результат будет стабильным и высокого
                качества.
            </p>

        </div>
    </div>
    <div id="recipes-popup" class="recipes-popup mfp-hide mfp-fade">
        <img class="recipes-popup__img" src="img/chef.jpg"></img>
        <div class="recipes-popup__text">
            <p>Наша гордость - наш шеф-повар! Стефан Джонсон - американец с ирландскими корнями. С самого детства
                барбекю и стейки были еженедельной традицией его семьи, многие рецепты классической американской кухни
                он усвоил от своего отца.</p>
            <p>Стефан имеет профессиональное образование повара, полученное в Kendall College Чикаго. Так же имеет опыт
                работы в таких престижных заведениях как : 17th Street Barbecue , Big Bob Gibson Bar-B-Que, Cattleack
                BBQ. Помимио этого, два года Стефан
                работал в Токио и имеет опыт традиционного японского барбекю!
            </p>
            <p>
                После 14 лет профессиональной деятельности, судьба свела Стефана с будущей женой из России, что и стало
                причиной его прибытия в нашу страну, чему наш коллектив безгранично рад!
            </p>
            <p>
                Этот колоссальный опыт позволил довести до идеала рецепты классического барбекю его отца, а так же
                придумать невероятно интересные, новые сочетания, которые не оставят вас равнодушными!
            </p>
            <p>Мы же со своей стороны предоставляем этому, без преувеличения, мастеру своего дела - профессиональное
                оборудование и первоклассные ингредиенты, чтобы Стефан мог полностью раскрывать свой опыт и талант в
                нашем заведении для вас!</p>
        </div>
    </div>
    <div id="reserve-popup" class="reserve-popup mfp-hide mfp-fade" style="background-image: url(img/paper-bg.jpg);">
        <div class="reserve-popup__title">Пожалуйста, заполните поля</div>
        <form id="reserve__form" action="">
            <div class="reserve-date__wrapper">
                <input type="date" name="reserve-date" required autocomplete="off" class="reserve-popup__date"
                    placeholder="Выберите дату">
                <input type="text" name="reserve-time" required autocomplete="off" placeholder="Время"
                    pattern="^(([0,1][0-9])|(2[0-3])):[0-5][0-9]$" title="Формат 00:00">
                <input type="number" name="reserve-count" required autocomplete="off" placeholder="Количество персон"
                    min="1" max="25" step="1">
            </div>
            <input type="text" name="reserve-name" required autocomplete="off"
                placeholder="Ваши имя, фамилия и отчество">
            <input type="tel" name="reserve-tel" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" required
                autocomplete="off"
                title="Введите корректный номера телефона(может начинаться с +7,8,+ и код города, с пробелами и скобками или без них)"
                placeholder="Номер телефона">
            <textarea name="reserve-text" placeholder="Дополнительная информация"></textarea>
            <button id="reserve__button" type="submit">Отправить</button>
        </form>
    </div>
    <a href="#" class="scrollup"></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>