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
        <section class="to_partners">
            <div class="to_partners__container">
                <h1 class="partners__title">
                    Партнерам
                </h1>
                <p class="partners__info">
                    Для того чтобы стать нашим партнером вы можете составить заказ на нашем сайте или заполнить форму обратной связи в разделе “контакты” или заказать обратный звонок.
                    Наши менеджеры свяжутся с вами и расскажут подробнее об условиях сотрудничества.
                    За вами будет закреплён персональный менеджер, с которым вы сможете связаться по любым рабочим вопросам в режиме 24/7.
                    Мы гарантируем вам индивидуальный подход, гибкую систему скидок. А также у нас есть возможность для предоставления вам стендов и образцов для вашей витрины.
                </p>
                <div class="partners-telephone">
                    
                    <a href="tel:+74951206677" class="about-us__contacts_phone">8 (495) 120-66-77</a>
                </div>
                <ul class="advantages__container">
                    <li class="advantage">
                        <img src="./img/png/quality_icon.png" alt="SANTERA" class="advantge_img">
                        <h3 class="advantage__text">На рынке с 2011 года</h3>
    
                    </li>
                    <li class="advantage">
                        <img src="./img/png/conditions_icon.png" alt="SANTERA" class="advantage_img">
                        <h3 class="advantage__text">Особые условия для постоянных клиентов</h3>
    
                    </li>
                    <li class="advantage">
                        <img src="./img/png/consulting_icon.png" alt="SANTERA" class="advantage_img">
                        <h3 class="advantage__text"> Профессиональные консультации</h3>
    
                    </li>
                </ul>

                <div class="download__catalog">
                    <a href="/catalog_pricelist/Santera ЛЕЙКИ.pdf" class="download__text">скачать каталог</a>
                </div>
                <div class="download__pricelist">
                    <a href="/catalog_pricelist/pricelist.xlsx" class="download__text">скачать прайс лист</a>
                </div>
                <div class="download__products-photo">
                    <a href="/img/png/6119.png" download=""><img src="/img/png/6119.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/6152.png" download=""><img src="/img/png/6152.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/6366.png" download=""><img src="/img/png/6366.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/6568.png" download=""><img src="/img/png/6568.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/7081.png" download=""><img src="/img/png/7081.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/7083.png" download=""><img src="/img/png/7083.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/7109.png" download=""><img src="/img/png/7109.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/7132.png" download=""><img src="/img/png/7132.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/7815.png" download=""><img src="/img/png/7815.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/7919.png" download=""><img src="/img/png/7919.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/8123.png" download=""><img src="/img/png/8123.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/2621.png" download=""><img src="/img/png/2621.png" alt="" class="download__products-photo__img"></a>
                    <a href="/img/png/2622.png" download=""><img src="/img/png/2622.png" alt="" class="download__products-photo__img"></a>
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
    <script src="/js/const/roots.js"></script>
    <script src="/js/const/goods.js"></script>
    <script src="/js/Сatalog.js"></script>
    <script src="/js/sorted_menu.js"></script>
    <script src="/js/live_search.js"></script>
    <script src="/js/cart.js"></script>
</body>
</html>