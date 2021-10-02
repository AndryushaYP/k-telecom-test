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
                <select name="city" class="header__list-city">
                    <option value="Екатеринбург">Екатеринбург</option>
                    <option value="Карпинск">Карпинск</option>
                </select>
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

        </section>
    </main>
</body>

</html>