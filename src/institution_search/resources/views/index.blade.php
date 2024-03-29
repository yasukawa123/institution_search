<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/top.css') }}" rel="stylesheet" type="text/css">
        <title>Bland</title>
    </head>
    <body>
        <!-- Header Start -->
        <header class="user-top-header">
            <div class="user-top-header-wrapper">
                <a href="error/404" class="brand">BLAND</a>
                <nav class="top-nav">
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
        <main>
            @can('shopadmin') {{-- 管理者に表示される --}}
                <div class="top-image-container" >
                    <h1>ようこそ管理者様</h1>
                    <div class="container">                    
                        <form id="form1" action="自分のサイトURL" hidden>
                            <div class="button-justify">
                                <input id="sbox"  id="s" name="s" type="text" placeholder="都道府県を入力" />
                                <input id="sbox"  id="s" name="s" type="text" placeholder="金額を入力" />
                                <input id="sbox"  id="s" name="s" type="text" placeholder="人数を入力" />
                                <input id="sbtn" type="submit" value="検索" /> 
                            </div>
                        </form>                                
                    </div>
                </div>
            @elsecan('user') {{-- 一般ユーザーに表示される --}}
                <div class="top-image-container" >
                    <h1>BLANDへようこそ</h1>
                    <div class="container">                    
                        <form id="form1" action="自分のサイトURL" hidden>
                            <div class="button-justify">
                                <input id="sbox"  id="s" name="s" type="text" placeholder="都道府県を入力" />
                                <input id="sbox"  id="s" name="s" type="text" placeholder="金額を入力" />
                                <input id="sbox"  id="s" name="s" type="text" placeholder="人数を入力" />
                                <input id="sbtn" type="submit" value="検索" /> 
                            </div>
                        </form>                                
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
                                <p>愛知01</p>
                            </div>
                            <div class="img-block">
                                <img src="/images/new_area/osaka01_space.jpeg" alt="大阪01">
                                <p>大阪01</p>
                            </div>
                            <div class="img-block">
                                <img src="/images/new_area/osaka02_space.jpeg" alt="大阪02">
                                <p>大阪02</p>
                            </div>
                        </div>
                    </div>

                    <h3>エリアから探す</h3>
                    <div class="search-area-container">
                        <img src="/images/japan_map.png" alt="日本地図">
                        <select name="ken">
                            <option value="北海道">北海道</option>
                        </select>
                        <select name="ken">
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                        </select>
                        <select name="ken">
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                        </select>
                        <select name="ken">
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                        </select>
                        <select name="ken">
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                        </select>
                        <select name="ken">
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                        </select>
                        <select name="ken">
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                        </select>
                        <select name="ken">
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                    </div>

                    <h3>News</h3>

                    <div class="news-area-container">
                        <div class="blog">
                            <div class="image-box">
                                <img src="/images/new_area/tokyo01_space.jpeg" alt="東京01">
                            </div>
                            <div class="top-news-text">
                                <h4>初夏の旅へ誘う宿</h4>
                                <p>Date : 2022/05/02</p>
                            </div>                        
                        </div>
                        <div class="blog">
                            <div class="image-box">
                                <img src="/images/new_area/aichi01_space.jpeg" alt="愛知01">
                            </div>
                            <div class="top-news-text">
                                <h4>初夏の旅へ誘う宿</h4>
                                <p>Date : 2022/04/29</p>
                            </div>
                        </div>
                        <div class="blog">
                            <div class="image-box">
                                <img src="/images/new_area/osaka01_space.jpeg" alt="大阪01">
                            </div>
                            <div class="top-news-text">
                                <h4>初夏の旅へ誘う宿</h4>
                                <p>Date : 2022/03/22</p>
                            </div>
                        </div>
                        <div class="blog">
                            <div class="image-box">
                                <img src="/images/new_area/osaka02_space.jpeg" alt="大阪02">
                            </div>
                            <div class="top-news-text">
                                <h4>初夏の旅へ誘う宿</h4>
                                <p>Date : 2022/03/02</p>
                            </div>
                        </div>    
                    </div>
                </div>
            @else {{-- ゲストに表示される --}}
            <div class="top-image-container" >
                    <h1>BLANDへようこそ</h1>
                    <div class="container">                    
                        <form id="form1" action="自分のサイトURL" hidden>
                            <div class="button-justify">
                                <input id="sbox"  id="s" name="s" type="text" placeholder="都道府県を入力" />
                                <input id="sbox"  id="s" name="s" type="text" placeholder="金額を入力" />
                                <input id="sbox"  id="s" name="s" type="text" placeholder="人数を入力" />
                                <input id="sbtn" type="submit" value="検索" /> 
                            </div>
                        </form>                                
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
                                <p>愛知01</p>
                            </div>
                            <div class="img-block">
                                <img src="/images/new_area/osaka01_space.jpeg" alt="大阪01">
                                <p>大阪01</p>
                            </div>
                            <div class="img-block">
                                <img src="/images/new_area/osaka02_space.jpeg" alt="大阪02">
                                <p>大阪02</p>
                            </div>
                        </div>
                    </div>

                    <h3>エリアから探す</h3>
                    <div class="search-area-container">
                        <img src="/images/japan_map.png" alt="日本地図">
                        <select name="ken">
                            <option value="北海道">北海道</option>
                        </select>
                        <select name="ken">
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                        </select>
                        <select name="ken">
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                        </select>
                        <select name="ken">
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                        </select>
                        <select name="ken">
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                        </select>
                        <select name="ken">
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                        </select>
                        <select name="ken">
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                        </select>
                        <select name="ken">
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                    </div>

                    <h3>News</h3>

                    <div class="news-area-container">
                        <div class="blog">
                            <div class="image-box">
                                <img src="/images/new_area/tokyo01_space.jpeg" alt="東京01">
                            </div>
                            <div class="top-news-text">
                                <h4>初夏の旅へ誘う宿</h4>
                                <p>Date : 2022/05/02</p>
                            </div>                        
                        </div>
                        <div class="blog">
                            <div class="image-box">
                                <img src="/images/new_area/aichi01_space.jpeg" alt="愛知01">
                            </div>
                            <div class="top-news-text">
                                <h4>初夏の旅へ誘う宿</h4>
                                <p>Date : 2022/04/29</p>
                            </div>
                        </div>
                        <div class="blog">
                            <div class="image-box">
                                <img src="/images/new_area/osaka01_space.jpeg" alt="大阪01">
                            </div>
                            <div class="top-news-text">
                                <h4>初夏の旅へ誘う宿</h4>
                                <p>Date : 2022/03/22</p>
                            </div>
                        </div>
                        <div class="blog">
                            <div class="image-box">
                                <img src="/images/new_area/osaka02_space.jpeg" alt="大阪02">
                            </div>
                            <div class="top-news-text">
                                <h4>初夏の旅へ誘う宿</h4>
                                <p>Date : 2022/03/02</p>
                            </div>
                        </div>    
                    </div>
                </div>
            @endcan
        </main>

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