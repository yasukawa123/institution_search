<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
        @yield('head')
        <title>Bland</title>
    </head>
    <body>
        <!-- Header Start -->
        <header class="user-header">
            <div class="user-header-wrapper">
                <a href="/" class="brand">BLAND</a>
                <nav class="nav">
                <!-- <button class="nav__toggle" aria-expanded="false" type="button">
                    menu
                </button> -->
                <ul class="nav-wrapper">
                @can('shopadmin') {{-- 管理者に表示される --}}
                    <li class="nav-item"><a href="/shop_admin">ショップ名</a></li>
                    <li class="nav-item"><a href="/shop_plan_admin">プラン一覧</a></li>
                    <li class="nav-item"><a href="/create/shop_plan_admin">プランを作る</a></li>
                    <li class="nav-item"><a href="error/404">サイト管理者へ問合せ</a></li>
                @elsecan('user') {{-- 一般ユーザーに表示される --}}
                    <li class="nav-item"><a href="/shop">施設を探す</a></li>
                    <li class="nav-item"><a href="error/404">BLANDについて</a></li>
                    <li class="nav-item"><a href="error/404">予約について</a></li>
                    <li class="nav-item"><a href="/reserve">予約確認</a></li>
                    <li class="nav-item"><a href="error/404">お問合せ</a></li>
                @else {{-- ゲストに表示される --}}
                    <li class="nav-item"><a href="/shop">施設を探す</a></li>
                    <li class="nav-item"><a href="error/404">BLANDについて</a></li>
                    <li class="nav-item"><a href="error/404">予約について</a></li>
                    <li class="nav-item"><a href="error/404">お問合せ</a></li>
                @endcan
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="error/404" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        <li class="footer-nav-item"><a href="error/404">BLANDとは</a></li>
                        <li class="footer-nav-item"><a href="error/404">demo text</a></li>
                        <li class="footer-nav-item"><a href="error/404">demo text</a></li>
                        <li class="footer-nav-item"><a href="error/404">demo text</a></li>
                        <li class="footer-nav-item"><a href="error/404">demo text</a></li>
                    </ul>
                </div>
                <div class="footer-wrapper">
                    <h4>Blandを体験</h4>
                    <ul>
                        <li class="footer-nav-item"><a href="error/404">BLANDとは</a></li>
                        <li class="footer-nav-item"><a href="error/404">demo text</a></li>
                        <li class="footer-nav-item"><a href="error/404">demo text</a></li>
                    </ul>
                </div>
                <div class="footer-wrapper">
                    <h4>Blandをもっと知る</h4>
                    <ul>
                        <li class="footer-nav-item"><a href="error/404">BLANDとは</a></li>
                    </ul>
                </div>
            </div>
            <span></span>
            <div class="footer-center">
                <h2>BLAND</h2>
                <ul>
                    <li class="footer-nav-item"><a href="error/404">保護方針</a></li>
                    <li class="footer-nav-item"><a href="error/404">サービス方針</a></li>
                    <li class="footer-nav-item"><a href="error/404">demo text</a></li>
                    <li class="footer-nav-item"><a href="error/404">demo text</a></li>
                    <li class="footer-nav-item"><a href="error/404">demo text</a></li>
                </ul>
                <p>&copy; 2022 BLAND CORPORATION.</p>
            </div>
        </footer> 
    </body>
</html>