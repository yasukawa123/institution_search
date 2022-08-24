@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container">
    <!-- 上部リンク遷移先 -->
    <p><a href="/">トップ</a> > ショップリスト</p>
        <div class="shops-flex">
            <div class="left-sidebar">
                <ul>
                    <li>料金</li>
                    <li>人数</li>
                    <li>場所</li>
                </ul>
                <input id="sbtn" type="submit" value="検索" /> 
            </div>
            <div class="right-shops">
                @foreach ($shops_list as $key => $shop_list)
                <div class="shop-card">
                    <!-- 画像 -->
                    <div class="shop-card-left">
                        <img src="{{ asset($shop_list['images01']) }}" width="auto" height="100%">
                    </div>
                    <!-- タイトル -->
                    <div class="shop-card-right">
                        <div class="shop-card-right-top">
                            <div class="shop-card-right-title">
                                <h3>{{ $shop_list['name'] }}</h3>
                            </div>
                            <!-- 県 -->
                            <div class="shop-card-right-tag">
                                <p>{{ $shop_list['prefecture'] }} > {{ $shop_list['city'] }}</p>
                            </div>
                            <!-- 紹介文 -->
                            <div class="shop-card-right-text">
                                <p>{{ mb_strimwidth( $shop_list['introduction_text'], 0, 280, '…', 'UTF-8' ) }}</p>
                            </div>
                        </div>
                        <div class="shop-card-right-bottom">
                            <!-- 金額 -->
                            <div class="shop-card-right-price">
                                <p>金額：¥{{ number_format($shop_list['price']) }}円 〜</p>
                            </div>
                            <!-- 人数 -->
                            <div class="shop-card-right-price">
                                <p>人数：{{ $shop_list['limit_num'] }}人 〜</p>
                            </div>
                            <!-- リンク -->
                            <a href="/shop={{ $key }}">
                                <div class="shop-card-right-link">
                                    <p>プランを見る>></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>  
        </div>
        <div class="justify-content-center">
        </div> 
    </div>
@endsection