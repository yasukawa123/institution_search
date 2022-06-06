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
                <a href="#" class="brand">BLAND</a>
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
        <main>
            <div class="top-image-container">
                <!-- <img src="/images/top-image03.jpg" alt="トップイメージ"> -->
                <h1>どんな未来に泊まろう。</h1>

                <div class="container">
                    <ul class="search-nav-wrapper">
                        <li class="search_nav_item"><a href="#">場所</a></li>
                        <li class="search_nav_item"><a href="#">金額</a></li>
                        <li class="search_nav_item"><a href="#">人数</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="container">
                <h3>最新のエリア</h3>
                <div class="new-area-container">
                    <div class="new-area-flex">
                        <div class="img-block">
                            <img src="/images/new_area/tokyo01_space.jpeg" alt="東京01">
                            <p>東京01</p>
                        </div>
                        <div class="img-block">
                            <img src="/images/new_area/aichi01_space.jpeg" alt="愛知01">
                            <p>東京01</p>
                        </div>
                        <div class="img-block">
                            <img src="/images/new_area/osaka01_space.jpeg" alt="大阪01">
                            <p>東京01</p>
                        </div>
                        <div class="img-block">
                            <img src="/images/new_area/osaka02_space.jpeg" alt="大阪02">
                            <p>東京01</p>
                        </div>
                    </div>
                </div>

                <h3>エリアから探す</h3>
                <div class="search-area-container">
                    <img src="/images/japan_map.png" alt="日本地図">
                </div>

                <h3>News</h3>

                <div class="new-area-container">
                    <div class="blog">
                        <img src="/images/new_area/tokyo01_space.jpeg" alt="東京01">
                        <h5>初夏の旅へ誘う宿</h5>
                        <p>Date : 2022/05/02</p>
                    </div>
                    <div class="blog">
                        <img src="/images/new_area/aichi01_space.jpeg" alt="愛知01">
                        <h5>初夏の旅へ誘う宿</h5>
                        <p>Date : 2022/04/29</p>
                    </div>
                    <div class="blog">
                        <img src="/images/new_area/osaka01_space.jpeg" alt="大阪01">
                        <h5>初夏の旅へ誘う宿</h5>
                        <p>Date : 2022/03/22</p>
                    </div>
                    <div class="blog">
                        <img src="/images/new_area/osaka02_space.jpeg" alt="大阪02">
                        <h5>初夏の旅へ誘う宿</h5>
                        <p>Date : 2022/03/02</p>
                    </div>    
                </div>
            </div>
        </main>

        <footer class="user-footer">
            <div class="container">
            <div class="footer-flex-wrapper">
                <div class="footer-wrapper">
                    <h3>Blandへようこそ</h3>
                    <ul>
                        <li class="footer-nav-item"><a href="#">BLANDとは</a></li>
                        <li class="footer-nav-item"><a href="#">demo text</a></li>
                        <li class="footer-nav-item"><a href="#">demo text</a></li>
                        <li class="footer-nav-item"><a href="#">demo text</a></li>
                        <li class="footer-nav-item"><a href="#">demo text</a></li>
                    </ul>
                </div>
                <div class="footer-wrapper">
                    <h3>Blandを体験</h3>
                    <ul>
                        <li class="footer-nav-item"><a href="#">BLANDとは</a></li>
                        <li class="footer-nav-item"><a href="#">demo text</a></li>
                        <li class="footer-nav-item"><a href="#">demo text</a></li>
                    </ul>
                </div>
                <div class="footer-wrapper">
                    <h3>Blandをもっと知る</h3>
                    <ul>
                        <li class="footer-nav-item"><a href="#">BLANDとは</a></li>
                    </ul>
                </div>
            </div>
            <span></span>
            <div class="footer-center">
                <h2>BLAND</h2>
                <ui>
                    <li class="footer-nav-item"><a href="#">保護方針</a></li>
                    <li class="footer-nav-item"><a href="#">サービス方針</a></li>
                    <li class="footer-nav-item"><a href="#">demo text</a></li>
                    <li class="footer-nav-item"><a href="#">demo text</a></li>
                    <li class="footer-nav-item"><a href="#">demo text</a></li>
                </ui>
                <p>&copy; 2022 BLAND CORPORATION.</p>
            </div>
        </footer> 
    </body>
</html>
