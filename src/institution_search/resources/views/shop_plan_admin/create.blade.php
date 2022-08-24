@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
@endsection
@section('content')
<div class="container">
	<!-- 上部リンク遷移先 -->
	<h2>プラン作成ページ</h2>
	<form action="{{ action('App\Http\Controllers\ShopPlanAdminController@store') }}" method='post' enctype="multipart/form-data">
        {{ csrf_field() }}
			プラン名：<input type='text' name='name'><br>
            大人最大人数：<input type='text' name='limit_num' value=""><br>
			子供最大人数：<input type='text' name='limit_num_small' value=""><br>
			１人あたり金額：<input type='text' name='price' value=""><br>
			チェックイン可能時刻：<input type='text' name='check_in' value=""><br>
			チェックアウト時刻：<input type='text' name='check_out' value=""><br>
			チケット数：<input type='text' name='filled_up' value=""><br>
			紹介文：<input type='text' name='introduction_text'><br>
			画像1：<input type='file' name='images01' accept=".jpeg,.jpg,.png"><br>
			画像2：<input type='file' name='images02' accept=".jpeg,.jpg,.png"><br>
			画像3：<input type='file' name='images03' accept=".jpeg,.jpg,.png"><br>
			<input  type='hidden' name='shop_id' value="{{ $user['shop_id'] }}">
			<input type='submit' value='登録'>
    </form>
	<br>
	<br>
	<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
	<p>【課題】</p>
	<p>・文言</p>
	<p>・バリデーションチェック</p>
	<p>・レイアウト</p>
	<p>・セキュリティ面のチェック</p>
	<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
	<br>
</div>
@endsection

