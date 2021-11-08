<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANTERA</title>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
<header class="header">
        <div class="wrapper">
            <header class="header__wrapper">
                <div class="header__logo">
                    <a href="index.php" class="header__logo-link">
                        <img src="./img/svg/logotype 1.svg" alt="SANTERA" class="header__logo-pic">
                    </a>
                </div>
                
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="catalog.php" class="header__link">Каталог</a>
                        </li>
                        <li class="header__item">
                            <a href="about_us.php" class="header__link">О нас</a>
                        </li>
                        <li class="header__item">
                            <a href="partners.php" class="header__link">Партнерам</a>
                        </li>
                        <li class="header__item">
                            <a href="contacts.php" class="header__link">Контакты</a>
                        </li>
                    </ul>
                    <div class="header__cart cart" tabindex="0">
                            <div class="cart-text">Корзина
                                <span class="cart__quantity">0</span>
                            </div>
                            <div class="cart-content">
                                <ul class="cart-content__list" data-simplebar>
                                    
                                    
                                </ul>
                                <div class="cart-content__bottom">
                                    <div class="cart-content__fullprice">
                                        <span>Итого:</span>
                                        <span class="fullprice">12</span>
                                    </div>
                                    <button class="cart-content__btn" data-graph-path="modal" data-graph-animation="fadeInUp">Перейти в корзину</button>
                                </div>
                            </div>

                    </div>
                
                </nav> 
    
                <ul class="account">
                    <li><a>
                        <img src="./img/svg/icon_account.svg" alt="SANTERA" class="account-pic">
                    </a>
                        <ul class="submenu">
                            <?php
                            if($_COOKIE['user'] == ''):
                            ?>
                            <li><a href="sign-in.php">Войти в аккаунт</a></li>
                            <li><a href="sign-up.php">Зарегистрировать новый аккаунт</a></li>
                            <?php else: ?>
                            <li><a href="info_user.php"><?=$_COOKIE['user']?></a></li>
                            <li><a href="validation/exit.php">Выйти</a></li>
                            <?php endif;?>
                      </ul>
                    </li>
                </ul>
            </header>
        </div>
    </header>


    <main class="main">
        <section class="contacts__intro">
            <div class="wrapper">
                <div class="contacts__wrapper">
                    <div class="contacts__start">
                        <h1 class="contacts__title">
                            Контакты
                        </h1>
                        <div class="contacts__item">
                            <div class="address">
                                <img src="./img/svg/adress_icon.svg" alt="SANTERA" class="address_icon-pic">
                                <p class="address__subtitle">
                                    109202, Москва, шоссе Фрезер, 19 стр. 3
                                </p>
                            </div>
                            
                            <div class="telephone">
                                <img src="./img/svg/phone_icon.svg" alt="SANTERA" class="phone_icon-pic">
                                <a href="tel:+74951206677" class="contacts_phone">8 (495) 120-66-77</a>
                            </div>
                            <div class="mail">
                                <img src="./img/svg/email_icon.svg" alt="SANTERA" class="email_icon-pic">
                                <a href="mailto:info@italsan.ru" class="contacts_mail">info@italsan.ru</a>
                            </div>
                            <div class="working__hours">
                                <img src="./img/svg/working_hours_icon.svg" alt="SANTERA" class="working_hours_icon-pic">
                                <div class="working__hours__text">
                                    <p class="working__hours__subtitle">
                                        Понедельник - Четверг: с 8.30 до 17.00
                                    </p>
                                    <p class="working__hours__subtitle">
                                        Пятница: с 8.30 до 16.00
                                    </p>
                                    <p class="working__hours__subtitle">
                                        Суббота и Воскресенье: Выходные дни
                                    </p>
                                </div>
    
                            </div>
                            
                        </div>
                        <form action="form/sender.php" method="post">
                            <?php
                            if($_COOKIE['user'] == ''):
                            ?>
                            <input type="text" name="name" placeholder="Имя" required class="order__input form__input"> 
                            <input type="text" name="email" placeholder="Email" required class="order__input form__input"><br>
                            <input type="text" name="question" placeholder="Ваш вопрос" required class="order__input form__input form__input__question"><br>
                            <?php else: ?>
                            <input type="text" name="name" placeholder="Имя" value="<?=$_COOKIE['user']?>" required class="order__input form__input"> 
                            <input type="text" name="email" placeholder="Email" value="<?=$_COOKIE['email']?>" required class="order__input form__input"><br>
                            <input type="text" name="question" placeholder="Ваш вопрос" required class="order__input form__input form__input__question"><br>
                            <?php endif;?>
                            <button class="send_form" type="button">Отправить</button>
                            <div class="status"></div>
                        </form>

                        
                </div>
                <div class="contacts__end">
                    <div class="contacts__route">
                        <a target="_blank" rel="nofollow" title="Схема проезда" href="/img/Схема проезда до ш.Фрезер 19.pdf" class="route">
                            Посмотреть схему проезда на общетсвенном транспорте
                        </a>
                    </div>
                    <div class="contacts__map" id="ymap">

                    </div>
                </div>
                
                
                
            </div>
        </section>
    </main>
    <div class="modal">
        <div class="modal__container order-modal" role="dialog" aria-modal="true" data-graph-target="modal">
            <div class="modal-content order-modal__content">
                <h2 class="order-modal__title">Оформление заказа</h2>
            </div>
            <div class="order-modal__info">
                <div class="order-modal__quantity order-modal__info-item">Товаров в заказе: <span>3 шт</span></div>
                <div class="order-modal__summ order-modal__info-item">Общая сумма заказа: <span>568 789 ₽</span></div>
                <div class="order-modal__products order-modal__info-item">
                    <button class="order-modal__btn">Состав заказа</button>
                    <ul class="order-modal__list">
                        
                    </ul>
                </div>
            </div>
            <form action="#" class="order-modal__form order">
                <input type="hidden" name="theme" value="Обратный звонок">
                <input type="hidden" name="admin_email[]" value="alexandersmirnov2004@gmail.com">
                <input type="hidden" name="form_subject" value="Заявка с сайта Santera">
                <?php    
                    if($_COOKIE['user'] == ''):
                    ?>
                    <label class="order__label">
                        <span class="order__text">Ваше имя</span>
                        <input type="text" name="Имя" class="order__input">
                    </label>
                    <label class="order__label">
                        <span class="order__text">Номер телефона</span>
                        <input type="tel" name="Телефон" class="order__input" placeholder="+7 (___)___-__-__">
                    </label>
                    <label class="order__label">
                        <span class="order__text">Email</span>
                        <input type="email" name="Email" class="order__input" placeholder="">
                    </label>
                    <label class="order__label">
                        <span class="order__text">Город</span>
                        <input type="text" name="Город" class="order__input">
                    </label>
                    <?php else: ?>
                    <label class="order__label">
                        <span class="order__text">Ваше имя</span>
                        <input type="text" name="Имя" value="<?=$_COOKIE['user']?>" class="order__input">
                    </label>
                    <label class="order__label">
                        <span class="order__text">Номер телефона</span>
                        <input type="tel" name="Телефон" value="<?=$_COOKIE['number']?>" class="order__input" placeholder="+7 (___)___-__-__">
                    </label>
                    <label class="order__label">
                        <span class="order__text">Email</span>
                        <input type="email" name="Email" value="<?=$_COOKIE['email']?>" class="order__input" placeholder="">
                    </label>
                    <label class="order__label">
                        <span class="order__text">Город</span>
                        <input type="text" name="Город" value="<?=$_COOKIE['city']?>" class="order__input">
                    </label>
                    <?php endif;?>
                <label class="order__label">
                    <span class="order__text">Комментарий к заказу</span>
                    <input type="text" name="Комментарий" class="order__input">
                </label>
                <button class="order__btn">Оформить заказ</button>
            </form>
        </div>
    </div>
    <script src="/js/simplebar.js"></script>
    <script src="/libs/modal.js"></script>
    <script src="/js/cart.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU>" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="libs/jquery.maskedinput.js"></script>
    <script src="libs/jquery.validate.min.js"></script>
    <script src="js/map.js"></script>
    <script src="js/form.js"></script>
</body>
</html>