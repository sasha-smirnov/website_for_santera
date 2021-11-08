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
        <form class="form form_login" method="post" action="validation/auth.php">
            <h2 class="form__text form__text_login">Войти</h2>
            <input name="email" class="form__field-text form__field-text_login" placeholder="Email" type="text"
            size="40" required minLength="2" id="login" maxLength="40" onChange="handleUserEmail" />
            <span id="username-error" class="username-error form__input-error"></span>
            <input name="password" class="form__field-text form__field-text_input_job form__field-text_login" placeholder="Пароль"
                type="password" size="40" required minLength="2" id="password" maxLength="200" onChange="handleUserPassword" />
            <span id="status-error" class="status-error form__input-error"></span>
            <button type="submit" class="form__save-button form__save-button_login">Войти</button>
            
        </form>
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
    <script src="/js/const/roots.js"></script>
    <script src="/js/const/goods.js"></script>
    <script src="/js/cart.js"></script>
</body>
</html>