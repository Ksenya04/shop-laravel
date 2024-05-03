<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ЧайТека/profile</title>

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
            margin-top: 20px;
            text-align: center;
        }

        .else {
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

        .update-container {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            margin: 100px 80px 100px 530px;
        }

        .update-form {
            background-color: #fff;
            border-radius: 28px;
            padding: 40px;
            margin-bottom: 16px;
            width: 350px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            color: #412C15;
            font-family: 'Russo One', sans-serif;
            font-size: 20px;
        }

        .form-group input {
            border-radius: 0.9375em;
            padding: 1em 6.300000000000001em;
            margin-top: 2px;
        }

        .button-form {
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
            margin-top: 30px;
        }

        .button-form:disabled {
            pointer-events: none;
        }

        .button-form:hover {
            color: #fff;
            background-color: #EB5412;
            border: 2px solid #EB5412;
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
            transform: translateY(-2px);
        }

        .button-form:active {
            box-shadow: none;
            transform: translateY(0);
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
                    @if (Auth::check())
                        <h2 style="margin-top: 36px">{{ Auth::user()->FIO }}</h2>
                        <a href="/profile">
                            <img src="ri_user-line.svg" alt="Аккаунт" style="margin-top: 40px">
                        </a>
                    @else
                        <a href="/reg">
                            <img src="ri_user-line.svg" alt="Аккаунт" style="margin-top: 23px">
                        </a>
                    @endif
                    <img src="favorite.svg" alt="Сердечко" style="margin-top: 15px">
                    <img src="shopping_cart.svg" alt="Корзина" style="margin-top: 15px">
                </diV>
            </header>
    </main>

    <section>
    @if (Auth::check())
        <div class="update-container">
            <form class="update-form" method="POST">
                @csrf
                @method('PATCH')
                <h1>Обновление данных {{ Auth::user()->nickname }} </h1>
                <div class="form-group">
                    <label for="FIO">Имя или ник:</label><br>
                    <input type="text" id="FIO" name="FIO" value={{ Auth::user()->FIO }}>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value={{ Auth::user()->email }}>
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label><br>
                    <input type="password" id="password" name="password">
                </div>

                <input type="submit" class="button-form" value="Обновить">
                <a type="submit" class="button-form" href="/logout">Выйти</a>
            </form>
        </div>
    @else
        <p class="else">Сначала авторизируйтесь!</p>
    @endif
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
