<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ЧайТека/catalog</title>

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

        .discount {
            color: #412C15;
            font-family: 'Russo One', sans-serif;
            font-size: 20px;
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

        .w-full {
            width: 100%
        }
    </style>
</head>

<body>
    <main>
        <header class="overlay header">
            <div class="header-links" style="margin-left: 90px; margin-right: 310px; margin-top: 15px">
                <div class="dropdown">
                    <a href="/catalog" class="dropbtn"> КАТАЛОГ</a>
                    <div class="dropdown-content">
                        <a href="/">ЧАЙ</a>
                        <a href="/">ЧАЙНЫЕ СМЕСИ</a>
                        <a href="/">ЧАЙНАЯ УТВАРЬ</a>
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
                @if (Auth::check())
                    <h2 style="margin-top: 36px">{{ Auth::user()->FIO }}</h2>
                    <a href="/profile">
                        <img src="ri_user-line.svg" alt="Аккаунт" style="margin-top: 40px">
                    </a>
                @else
                    <a href="/reg">
                        <img src="CrAccount.svg" alt="Аккаунт создание" style="margin-top: 23px">
                    </a>
                    <a href="/login">
                        <img src="ri_user-line.svg" alt="Аккаунт" style="margin-top: 23px">
                    </a>
                @endif
                <img src="favorite.svg" alt="Сердечко" style="margin-top: 15px">
                <img src="shopping_cart.svg" alt="Корзина" style="margin-top: 15px">
            </diV>
        </header>
    </main>

    <section>
        <h1>КАТАЛОГ</h1>
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
</body>

</html>
