<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ЧайТека</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/russo-one" rel="stylesheet">

    <!-- Styles -->
    <style>
        @import url('https://fonts.cdnfonts.com/css/russo-one');

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

        .text-menu {
            display: flex;
            justify-content: center;
            margin: 100px 0px 100px 0px;
            color: #412C15;
            font-family: 'Russo One', sans-serif;
            font-size: 24px;
        }

        .text-overlay {
            bottom: 600px;
            left: 80px;
            padding: 10px;
            border-radius: 5px;
            color: #412C15;
            font-family: 'Russo One', sans-serif;
            font-size: 82px;
        }

        .text-overlay-2 {
            bottom: 400px;
            left: 80px;
            right: 80px;
            white-space: normal;
            padding: 10px;
            border-radius: 5px;
            color: #B88E5E;
            font-family: 'Russo One', sans-serif;
            font-size: 22px;
        }

        .text-overlay-button {
            position: absolute;
            display: flex;
            bottom: 130px;
            left: 80px;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            font-family: 'Russo One', sans-serif;
            font-size: 22px;
        }

        .button {
            background-color: #EB5412;
            border-radius: 0.9375em;
            color: #fff;
            font-family: 'Russo One', sans-serif;
            font-size: 20px;
            font-weight: 600;
            line-height: normal;
            padding: 1em 2.3em;
            text-align: center;
            text-decoration: none;
        }

        .button:disabled {
            pointer-events: none;
        }

        .button:hover {
            color: #fff;
            background-color: #7B6143;
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
            transform: translateY(-2px);
        }

        .button:active {
            box-shadow: none;
            transform: translateY(0);
        }

        .overlay-button {
            left: 80px;
            color: #fff;
            font-size: 22px;
        }

        .center-button {
            display: flex;
            justify-content: center;
            margin: 1100px 0px 100px 0px;
        }

        .center-button-2 {
            display: flex;
            justify-content: center;
            margin: 100px 0px 100px 0px;
        }

        .card-container {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            margin: 100px 80px 100px 80px;
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 28px;
            padding: 20px;
            margin-bottom: 16px;
            width: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .discount {
            color: #412C15;
            font-family: 'Russo One', sans-serif;
            font-size: 20px;
        }

        .card-title {
            font-size: 24px;
            margin-top: 0;
            text-align: center;
            color: #412C15;
            font-family: 'Russo One', sans-serif;
        }

        .card-image {
            width: 60%;
            height: auto;
            margin-bottom: 16px;
        }

        .add-to-cart {
            background-color: #7B6143;
            color: white;
            padding: 10px;
            cursor: pointer;
            border: 2px solid #7B6143;
            font-family: 'Russo One', sans-serif;
            font-size: 20px;
            border-radius: 0.9375em;
            display: inline-block;
            font-weight: 600;
            line-height: normal;
            outline: none;
            padding: 1em 2.3em;
            text-align: center;
        }

        .add-to-cart:disabled {
            pointer-events: none;
        }

        .add-to-cart:hover {
            color: #fff;
            background-color: #EB5412;
            border: 2px solid #EB5412;
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
            transform: translateY(-2px);
        }

        .add-to-cart:active {
            box-shadow: none;
            transform: translateY(0);
        }

        .ibg {
            position: absolute;
            object-fit: cover;
            top: 0;
            width: 100%;
        }

        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit;
            background-color: #F4F4F4;
        }

        main {
            left: 0;
            top: 0;
            width: 100%;
            z-index: -10;
        }

        header {
            display: flex;
            flex-flow: row nowrap;
            justify-content: flex-start;
            align-items: center;
            padding: 0px 0px;
            position: relative;
            z-index: 1;
        }

        .br h2 {
            display: flex;
            position: absolute;
            top: 90px;
            left: 80px;
            margin: 0px;
        }

        .br h1 {
            display: flex;
            position: absolute;
            top: 320px;
            left: 80px;
        }

        .w-full {
            width: 100%
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
                <img src="logotip.png" alt="ЧайТека"
                    style="margin-top: 15px; text-align:center; margin-right: 90px; margin-left: 20px">
                <div class="header-links" style="margin-rignt: 100px; margin-left: 400px">
                    @if (Auth::check())
                        <h2 style="margin-top: 36px">{{ Auth::user()->FIO }}</h2>
                        <a href="/profile">
                            <img src="ri_user-line.svg" alt="Аккаунт" style="margin-top: 42px">
                        </a>
                    @else
                        <a href="/reg">
                            <img src="CrAccount.svg" alt="Аккаунт создание" style="margin-top: 24px">
                        </a>
                        <a href="/login">
                            <img src="ri_user-line.svg" alt="Аккаунт" style="margin-top: 23px">
                        </a>
                    @endif
                    <img src="favorite.svg" alt="Сердечко" style="margin-top: 15px">
                    @if (Auth::check())
                        <a href="{{ route('buy', ['id' => Auth::user()->id]) }}">
                            <img src="shopping_cart.svg" alt="Корзина" style="margin-top: 41px">
                        </a>
                    @else
                        <img src="shopping_cart.svg" alt="Корзина" style="margin-top: 23px">
                    @endif
                </diV>
            </header>

            <section class="ibg">
                <img class="w-full" src="p1.jpg" alt="Чай">
            </section>

            <section>
                <div class="br">
                    <h2><a class="text-overlay" style="">Британский <br /> Огонь</a></h2>
                    <h1><a class="text-overlay-2" style="">По результатам Большого слепого<br /> теста
                            качества
                            чая этот сорт<br /> признан одним из лучших Ассамов<br /> на рынке</a></h1>
                    <a href="/" class="button text-overlay-button">КУПИТЬ</a>
                </div>
            </section>
    </main>

    <section>
        <div class="center-button" style="">
            <a href="/sale" class="button overlay-button" style="">ПОСМОТРЕТЬ АКЦИИ</a>
        </div>
        <section>
            <img class="w-full" src="Tea1.png" alt="Чай1">
        </section>
    </section>

    <section>
        <a class="text-menu">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</a>

        <div class="card-container">
            @foreach ($products as $product)
                <div class="card">
                    <div class="card-top">
                        <span class="discount">Скидка 15%</span>
                        <img class="favorite" src="favorite.svg">
                    </div>
                    <img src="{{ asset('tea-black.png') }}" alt="">
                    <h2 class="card-title">{{ $product->name }}</h2>
                    <p class="card-title">{{ $product->price }} р.</p>
                    @if (Auth::check())
                        <form action="{{ route('add.to.cart', $product) }}" method="POST">
                            @csrf
                            <button class="add-to-cart" type="submit">В корзину</button>
                        </form>
                    @else
                        <a class="add-to-cart" href="{{ route('register') }}">В корзину</a>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <section>
            <img class="w-full" src="Tea2.png" alt="Чай2">
        </section>
        <a class="text-menu">НОВИНКИ</a>

        <div class="card-container">
            @foreach ($products as $product)
                <div class="card">
                    <div class="card-top">
                        <span class="discount">Скидка 15%</span>
                        <img class="favorite" src="favorite.svg">
                    </div>
                    <img src="{{ asset('tea-black.png') }}" alt="">
                    <h2 class="card-title">{{ $product->name }}</h2>
                    <p class="card-title">{{ $product->price }} р.</p>
                    @if (Auth::check())
                        <form action="{{ route('add.to.cart', $product) }}" method="POST">
                            @csrf
                            <button class="add-to-cart" type="submit">В корзину</button>
                        </form>
                    @else
                        <a class="add-to-cart" href="{{ route('register') }}">В корзину</a>
                    @endif
                </div>
            @endforeach
        </div>

        <div class="center-button-2" style="">
            <a href="/shop" class="button overlay-button" style="">ВЫБРАТЬ МАГАЗИН</a>
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
                    <a href="https://t.me/shio_mii">
                        <img class="" src="Vector.svg">
                    </a>
                    <a href="https://vk.com/shio_mi">
                        <img class="" src="ion_logo-vk.svg">
                    </a>
                    <a href="https://discordapp.com/users/832618763865948200">
                        <img class="" src="carbon_logo-discord.svg">
                    </a>
                </div>
                <p>chaiteka.com © 2023</p>
            </div>
        </section>
    </footer>
    </div>
</body>

</html>
