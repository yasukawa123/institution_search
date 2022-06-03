@extends('layouts.app')

@section('content')
<div class="top-image-container">
    <img src="/images/top-image03.jpg" alt="トップイメージ">
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
    <h2>最新エリア</h2>
    <div class="new-area-container">
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

    <h3>エリアから探す</h3>

    <div class="new-area-container">
        <img src="/images/japan_map.png" alt="日本地図">
    </div>

    <h3>News</h3>

    <div class="new-area-container">
        <img src="/images/new_area/tokyo01_space.jpeg" alt="東京01">
        <h5>初夏の旅へ誘う宿</h5>
        <p>Date : 2022/05/02</p>
        <img src="/images/new_area/aichi01_space.jpeg" alt="愛知01">
        <h5>初夏の旅へ誘う宿</h5>
        <p>Date : 2022/04/29</p>
        <img src="/images/new_area/osaka01_space.jpeg" alt="大阪01">
        <h5>初夏の旅へ誘う宿</h5>
        <p>Date : 2022/03/22</p>
        <img src="/images/new_area/osaka02_space.jpeg" alt="大阪02">
        <h5>初夏の旅へ誘う宿</h5>
        <p>Date : 2022/03/02</p>
    </div>

</div>
@endsection
