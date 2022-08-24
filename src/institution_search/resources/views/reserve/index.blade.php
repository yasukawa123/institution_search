@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="container">
    <!-- 上部リンク遷移先 -->
        <p>予約確認ページ</p>
        @foreach ($reserves_list as $reserve_list)
			<div class="shop-card">
				<!-- 画像 -->
				<div class="shop-card-left">
					<!-- <p>画像を追加</p> -->
                    <img src="{{ asset($reserve_list['shopPlan']['images01']) }}" width="auto" height="100%" style="border:0;">
				</div>
				<!-- タイトル -->
				<div class="shop-card-right">
					<div class="shop-card-right-top">
                        <p>Shop：{{ $reserve_list['shop']['name'] }}</p>
						<p>Plan ID：{{ $reserve_list['shopPlan']['id'] }}</p>
                        <p>代表TEL：{{ $reserve_list['shop']['tel'] }}</p>
                        <p>住所：{{ $reserve_list['shop']['address'] }}</p>
                        <p>プラン名：{{ $reserve_list['shopPlan']['name'] }}</p>
                        <p>合計金額：￥{{ $reserve_list['shopPlan']['price'] * $reserve_list['reserve']['num']}}( ¥{{$reserve_list['shopPlan']['price'] }} / 人)</p>
                        <p>予定人数：{{ $reserve_list['reserve']['num'] }}人</p>
                        <p>子供人数：{{ $reserve_list['reserve']['num_small'] }}人</p>
                        <p>予約日：{{ $reserve_list['reserve']['reserve_date'] }}</p>
                        <p>チェックイン予定時間：{{ $reserve_list['reserve']['check_in'] }}</p>
                        <p>チェックアウト：{{ $reserve_list['shopPlan']['check_out'] }}</p>
					</div>
				</div>
			</div>
		@endforeach
    </div>
    <script src="{{ asset('/js/gacha.js') }}"></script>
@endsection