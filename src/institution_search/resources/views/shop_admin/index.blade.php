@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/swiper.css') }}" rel="stylesheet" type="text/css">
<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
@endsection
@section('content')
<div class="container">
	<!-- 上部リンク遷移先 -->
	@if(empty($shop_id))
		<p>あなたのショップを作りましょう</p><br>
		<br>
		<br>
		<a href="/create/shop_admin">ショップ作成</a>
		<br>
		<br>
		<br>
		<br>
		<br>
		<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
		<br>
		<p>【課題】</p>
		<p>・文言</p>
		<p>・レイアウト</p>
		<p>・セキュリティ面のチェック</p>
	@else
		<h2>{{ $shops_make['name'] }}</h2>
		<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<img src="{{ asset($shops_make['images01']) }}">
				</div>
				<div class="swiper-slide">
					<img src="{{ asset($shops_make['images02']) }}">
				</div>
				<div class="swiper-slide">
					<img src="{{ asset($shops_make['images03']) }}">
				</div>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

			<!-- If we need scrollbar -->
			<!-- <div class="swiper-scrollbar"></div> -->
		</div>
		<script src="{{ mix('js/swiper.js') }}"></script>
		<p>住所：{{ $shops_make['prefecture'] }}</p>
		<p>紹介：{{ $shops_make['introduction_text'] }}</p>
		<a href="/edit/shop_admin">ショップ編集</a>
		<a href="/shop_plan_admin">プラン一覧へ</a>
		<br>
		<br>
		<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
		<br>
		<p>【課題】</p>
		<p>・ショプ編集ボタンの表示</p>
		<p>・DBの文字数制限</p>
		<p>・ショププラン一覧へのボタンの表示</p>
		<p>・レイアウト</p>
		<p>・セキュリティ面のチェック</p>
	@endif
	<div class="justify-content-center">
	</div> 
</div>
@endsection