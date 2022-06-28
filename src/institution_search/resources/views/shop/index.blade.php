@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="container">
        <div class="shops-flex">
            <div class="left-sidebar">
                <ul>
                    <li>料金</li>
                    <li>人数</li>
                    <li>場所</li>
                </ul>
            </div>
            <div class="right-shops">
                @foreach ($shops as $shop)
                <div class="shop-card">
                    <!-- 画像 -->
                    <div class="shop-card-left">
                        {{ $shop->images }}
                    </div>
                    <!-- タイトル -->
                    <div class="shop-card-right">
                        <div class="shop-card-right-top">
                            <div class="shop-card-right-title">
                                <h3>{{ $shop->name }}</h3>
                            </div>
                            <!-- 県 -->
                            <div class="shop-card-right-tag">
                                <p>{{ $shop->prefecture }} > {{ $shop->city }}</p>
                            </div>
                            <!-- 紹介文 -->
                            <div class="shop-card-right-text">
                                <p>{{ mb_strimwidth( $shop->introduction_text, 0, 280, '…', 'UTF-8' ) }}</p>
                            </div>
                        </div>
                        <div class="shop-card-right-bottom">
                            <!-- 金額 -->
                            <div class="shop-card-right-price">
                                <p>¥ 00,000</p>
                            </div>
                            <!-- リンク -->
                            <div class="shop-card-right-link">
                                <p>プランを見る>></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection