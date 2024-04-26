<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/russo-one" rel="stylesheet">

    <style>
        body {
            background-color: #F4F4F4;
            margin: 0px;
        }

        .overlay {
            position: absolute;
            top: 0;
            color: #412C15;
            font-family: 'Russo One', sans-serif;
            font-size: 16px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-links {
            display: flex;
            gap: 20px;
            cursor: pointer;
        }

        .dropdown {
            float: left;
            overflow: hidden;
            cursor: pointer;
        }

        .dropbtn {
            border: none;
            background-color: inherit;
            font-family: inherit;
            color: #412C15;
            text-decoration: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #F4F4F4;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 10px;
        }

        .dropdown-content a {
            float: none;
            color: #412C15;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            border-radius: 10px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .body-header {
            background-color: #000;
        }

        h1 {
            font-family: 'Russo One', sans-serif;
            font-size: 20px;
            color: #412C15;
            margin-top: 120px;
            text-align: center;
        }

        .body-footer {
            gap: 140px;
            display: flex;
            font-family: 'Russo One', sans-serif;
            font-size: 20px;
            color: #fff;
            margin: 40px 30px 40px 30px;
        }

        .footer-f {
            background-color: #E6BE8F;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .body-footer p {
            display: flex;
            font-family: 'Russo One', sans-serif;
            font-size: 16px;
            color: #fff;
        }

        .map-conteiner {
            gap: 250px;
            display: flex;
            font-family: 'Russo One', sans-serif;
            margin: 60px 20px 100px 80px;
        }

        .map-conteiner a {
            font-family: 'Russo One', sans-serif;
            font-size: 20px;
            color: #412C15;
        }

        .map-conteiner p {
            font-family: 'Russo One', sans-serif;
            font-size: 14px;
            color: #7B6143;
        }
    </style>
</head>

<body>
    <main>
        <div class="relative">
            <header class="overlay header">
                <div class="header-links" style="margin-left: 90px; margin-right: 310px; margin-top: 15px">
                    <div class="dropdown">
                        <a href="/catalog" class="dropbtn"> КАТАЛОГ</a>
                        <div class="dropdown-content">
                            <a href="/catalog-tea">ЧАЙ</a>
                            <a href="/catalog-smesi">ЧАЙНЫЕ СМЕСИ</a>
                            <a href="/catalog-ytvar">ЧАЙНАЯ УТВАРЬ</a>
                        </div>
                    </div>
                    <a href="/sale" class="dropbtn">АКЦИИ</a>
                    <a href="/shop" class="dropbtn">МАГАЗИНЫ</a>
                </div>
                <a href="/">
                    <img src="logotip.png" alt="ЧайТека"
                        style="margin-top: 15px; text-align:center; margin-right: 90px; margin-left: 20px">
                </a>
                <div class="header-links" style="margin-rignt: 100px; margin-left: 400px">
                    <img src="ri_user-line.svg" alt="Аккаунт" style="margin-top: 23px">
                    <img src="favorite.svg" alt="Сердечко" style="margin-top: 15px">
                    <img src="shopping_cart.svg" alt="Корзина" style="margin-top: 15px">
                </diV>
            </header>
    </main>

    <h1>МАГАЗИНЫ</h1>

    <section class="map-conteiner">
        <div>
            <a>г. Санкт-Петербург, Петергофское шоссе,<br /> д. 51 А, ТЦ «Жемчужная Плаза»,<br /> цокольный этаж</a>
            <p>Время работы: с 10-00 до 20-00</p>
            <a>+7(964)311-50-77</a>
            <hr>
            <a>г. Калининград, ул. Профессора Баранова,<br />  30, ТЦ ЭПИЦЕНТР</a>
            <p>Время работы: с 10-00 до 20-00</p>
            <a>+7(964)311-50-77</a>
        </div>
        <div>
            <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abdee1a25fe837d47e23b5a23687b651c6c42f0579a0ee232b9010e1ce93a0eae&amp;width=600&amp;height=600&amp;lang=ru_RU&amp;scroll=true">
            </script>
        </div>
    </section>

    <footer class="footer-f">
        <section class="body-footer">
            <div style="margin-left: 80px">
                <section>
                    <img class="" src="LogFu.png" alt="Чай2">
                </section>
                <p>Политика конфидициальности</p>
            </div>
            <div>
                <a>Информация<br /></a>
                <p>Чайтека - это место, где сбываются ваши <br /> мечты и разливается самый вкусный чай!<br /></p>
                <a>Ksyndeli.h.kek@gmail.com</a>
            </div>
            <div>
                <a>Контакты</a>
                <div style="cursor: pointer">
                    <a href="/">
                        <img class="" src="Vector.svg">
                    </a>
                    <a href="/">
                        <img class="" src="ion_logo-vk.svg">
                    </a>
                    <a href="/">
                        <img class="" src="carbon_logo-discord.svg">
                    </a>
                </div>
                <p>chaiteka.com © 2023</p>
            </div>
        </section>
    </footer>
</body>

</html>
