<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
        <!-- <link href="{{ asset('/css/top.css') }}" rel="stylesheet" type="textcss"> -->
        @yield('head')
        <title>Bland</title>
    </head>
    <body>
        <!-- Header Start -->
        <header class="user-header">
            <div class="user-header-wrapper">
                <a href="#" class="brand">BLAND</a>
                <nav class="nav">
                <!-- <button class="nav__toggle" aria-expanded="false" type="button">
                    menu
                </button> -->
                <ul class="nav-wrapper">
                    <li class="nav-item"><a href="/shop">施設を探す</a></li>
                    <li class="nav-item"><a href="#">BLANDについて</a></li>
                    <li class="nav-item"><a href="#">予約について</a></li>
                    <li class="nav-item"><a href="#">お問合せ</a></li>
                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('会員登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
            <span></span>
            <div class="footer-center">
                <h2>BLAND</h2>
                <ul>
                    <li class="footer-nav-item"><a href="#">保護方針</a></li>
                    <li class="footer-nav-item"><a href="#">サービス方針</a></li>
                    <li class="footer-nav-item"><a href="#">demo text</a></li>
                    <li class="footer-nav-item"><a href="#">demo text</a></li>
                    <li class="footer-nav-item"><a href="#">demo text</a></li>
                </ul>
                <p>&copy; 2022 BLAND CORPORATION.</p>
            </div>
        </footer> 
    </body>
</html>