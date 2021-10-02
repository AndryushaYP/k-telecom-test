<!DOCTYPE html>
<html>

<head>
    <?php
    wp_head();
    ?>
</head>

<body>
    <header class="header">
        <nav class="header__navigation">
            <div class="header__links">
                <div>
                    <select name="city" class="header__list-city">
                        <option value="Екатеринбург">Екатеринбург</option>
                        <option value="Карпинск">Карпинск</option>
                    </select>
                    <div class="header__map-icon"></div>
                </div>
                <a href="https://k-telecom.org/addresses/" target="_blank"
                    class="header__link header__link_contact">Контакты</a>
            </div>
            <div class="header__links">
                <a href="https://k-telecom.org/payment/" target="_blank" class="header__link">Оплата услуг</a>
                <a href="https://k-telecom.org/news/" target="_blank" class="header__link header__link_news">Новости</a>
            </div>
        </nav>
        <div class="header__container">
            <div class="header__logo"></div>
            <span class="header__phone">8 (343) 389 28 28</span>
            <button class="header__button">Оставить заявку</button>
        </div>
    </header>
    <main class="page">
        <section class="form-section">
            <h1 class="form-section__title">Форма для ОПП</h1>
            <form class="form">
                <label class="form__label">
                    <span class="form__field-caption">Номер заявки</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Желаемая дата подключения для клиента</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Дата/время заявки</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Необходимость в оборудовании</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Фамилия клиента</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Город</span>
                    <select class="form__input">
                        <option value="Екатеринбург">Екатеринбург</option>
                    </select>
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Имя клиента</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Адрес</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Отчество клиента</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Тип дома</span>
                    <select class="form__input">
                        <option value="Многоквартирный">Многоквартирный</option>
                    </select>
                </label>
                <label class="form__label">
                    <span class="form__field-caption">№ телефона основной</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label">
                    <span class="form__field-caption">Тариф</span>
                    <select class="form__input">
                        <option value="Резвый клик">Резвый клик</option>
                    </select>
                </label>
                <label class="form__label">
                    <span class="form__field-caption">№ телефона дополнительный</span>
                    <input type="text" class="form__input">
                </label>
                <label class="form__label form__label_comment">
                    <span class="form__field-caption">Комментарий</span>
                    <textarea class="form__textarea form__textarea_comment"></textarea>
                </label>
                <button type="submit" class="form__button form__button_submit">Отправить</button>
            </form>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__logo"></div>
        <nav class="footer__navigation">
            <ul class="footer__links">
                <li class="footer__link"><a href="#">Интернет</a></li>
                <li class="footer__link"><a href="#">Телевидение</a></li>
                <li class="footer__link"><a href="#">Телефония</a></li>
                <li class="footer__link"><a href="#">Контакты офиса</a></li>
            </ul>
            <ul class="footer__socials">
                <li class="footer__link footer__link_social footer__link_instagram"><a href="#"></a></li>
                <li class="footer__link footer__link_social footer__link_youtube"><a href="#"></a></li>
                <li class="footer__link footer__link_social footer__link_vk"><a href="#"></a></li>
            </ul>
        </nav>

    </footer>
</body>

</html>