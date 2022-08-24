@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container">
<!-- 上部リンク遷移先 -->
<br>
<br>
	@if(!empty($shop_id) && empty($shopPlan_list))
	<p>【elseif プランを作成しましょう】</p><br>
		<br>
		<a href="/create/shop_plan_admin">プラン作成</a>
		<p>（中央配置）</p>
		<br>
		<br>
		<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
		<p>【課題】</p>
		<p>・プランがありませんを表示させる</p>
		<p>・文言</p>
		<p>・レイアウト</p>
		<p>・セキュリティ面のチェック</p>
		<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
		<br>
		<br>
	@else
	<p>【else プランがあれば】</p><br>
		<br>
		<p>（中央配置）</p>
		<a href="/create/shop_plan_admin">プラン作成</a>
		<div class="center">
		@foreach ($shopPlan_list as $shopPlan)
			<p>プラン名前：{{ $shopPlan['name'] }}</p>
			<p>紹介文：{{ $shopPlan['introduction_text'] }}</p>
			<p>大人最大人数：{{ $shopPlan['limit_num'] }}</p>
			<p>子供最大人数{{ $shopPlan['limit_num_small'] }}</p>
			<p>金額：{{ $shopPlan['price'] }}</p>
			<p>チェックイン可能時間：{{ $shopPlan['check_in'] }}</p>
			<p>チェックアウト：{{ $shopPlan['check_out'] }}</p>
			<p>チケット数：{{ $shopPlan['filled_up'] }}</p>
			<img src="{{ asset($shopPlan['images01']) }}" style="width:500px;">
			<img src="{{ asset($shopPlan['images02']) }}" style="width:500px;">
			<img src="{{ asset($shopPlan['images03']) }}" style="width:500px;">
			<br>
			<br>
			<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
			<br>
			<br>
			
		@endforeach
		<br>
		</div>
		<br>
		<a href="/edit/shop_plan_admin">ショップ編集</a>
		<p>　・プランの削除ボタン</p>
		<a href="/destroy/shop_plan_admin">ショップ削除</a>
		<br>
		<br>
		<br>
		<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
		<p>【課題】</p>
		<p>・javscriptでクリック時に開くアクションを作る</p>
		<p>・文言</p>
		<p>・レイアウト</p>
		<p>・セキュリティ面のチェック（SQLインジェクションとXXSを最低限）</p>
		<p>・プランの内容を表示させる</p>
		<p>・プラン作成ボタンの表示</p>
		<p>・プランをforeachで表示</p>
		<p>・プランの内容を表示</p>
		<p>・プランの残りチケット数　（1/4部屋みたいな表示）</p>
		<p>・プランの編集ボタン</p>
		<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
		<br>
		<br>
	<div class="justify-content-center"></div>
	@endif
</div>
@endsection