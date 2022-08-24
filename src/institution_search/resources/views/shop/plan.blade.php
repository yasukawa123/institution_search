@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container">
	<!-- 上部リンク遷移先 -->
	<p><a href="/">トップ</a> > <a href="/shop">ショップリスト</a> > <a href="/shop={{ $shop->id }}">{{ $shop->name }}</a> > ショッププラン </p>
	<h2>plan プラン詳細ページ</h2>
	<p>{{ $shopPlan->introduction_text }}</p>
	<div class="shop-card">
		<!-- 画像 -->
		<div class="shop-card-left">
			<p>画像を追加しよう</p>
		</div>
		<!-- タイトル -->
		<div class="shop-card-right">
			<div class="shop-card-right-top">
				
				<div class="shop-card-right-title">
					<p>プランの名：{{ $shopPlan->name }}</p>
				</div>
					
				<div class="shop-card-right-tag">
					<p>金額：{{ $shopPlan->price }}</p>
					<p>最大人数：{{ $shopPlan->limit_num }}</p>
					<p>小学生未満最大人数：{{ $shopPlan->limit_num_small }}</p>
					<p>※お子様の料金は無料になります</p>
					<p>チェックイン：{{ $shopPlan->check_in }}</p>
					<p>チェックアウト：{{ $shopPlan->check_out }}</p>
				</div>
				<div class="shop-card-right-text">
					<p></p>
				</div>
			</div>
		</div>
	</div>
	<button><a href="/create/plan={{ $shopPlan->id }}/shop={{ $shop->id }}">このプランにする</a></button>
</div>
@endsection
