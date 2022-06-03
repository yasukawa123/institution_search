<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/top.css') }}" rel="stylesheet" type="text/css">    
    <title>Laravel</title>
</head>
<body>
<!-- Header Start -->
<header class="user-header">
    <div class="user-header-wrapper">
        <a href="#" class="brand">COMMON-BLAND</a>
        <nav class="nav">
        <!-- <button class="nav__toggle" aria-expanded="false" type="button">
            menu
        </button> -->
        <ul class="nav-wrapper">
            <li class="nav-item"><a href="#">BLANDについて</a></li>
            <li class="nav-item"><a href="#">予約について</a></li>
            <li class="nav-item"><a href="#">お問合せ</a></li>
            <li class="nav-item"><a href="#">会員登録</a></li>
        </ul>
        </nav>
    </div>
</header>

@yield('content')

<footer class="user-footer">
    <div class="container">

    <div class="footer-flex-wrapper">
        <div class="footer-wrapper">
            <h4>Blandへようこそ</h4>
            <ul>
                <li class="footer-nav-item"><a href="#">BLANDとは</a></li>
                <li class="footer-nav-item"><a href="#">demo text</a></li>
                <li class="footer-nav-item"><a href="#">demo text</a></li>
                <li class="footer-nav-item"><a href="#">demo text</a></li>
                <li class="footer-nav-item"><a href="#">demo text</a></li>
            </ul>
        </div>
        <div class="footer-wrapper">
            <h4>Blandを体験</h4>
            <ul>
                <li class="footer-nav-item"><a href="#">BLANDとは</a></li>
                <li class="footer-nav-item"><a href="#">demo text</a></li>
                <li class="footer-nav-item"><a href="#">demo text</a></li>
            </ul>
        </div>
        <div class="footer-wrapper">
            <h4>Blandをもっと知る</h4>
            <ul>
                <li class="footer-nav-item"><a href="#">BLANDとは</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-center">
        <h4>BLAND LOGO</h4>
        <ul class="footer-nav">
            <li class="footer-nav-item"><a href="#">保護方針</a></li>
            <li class="footer-nav-item"><a href="#">サービス方針</a></li>
            <li class="footer-nav-item"><a href="#">demo text</a></li>
            <li class="footer-nav-item"><a href="#">demo text</a></li>
            <li class="footer-nav-item"><a href="#">demo text</a></li>
        </ul>
    </div>
</footer>
</body>
</html>
