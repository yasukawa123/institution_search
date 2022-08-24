@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container">
	<!-- 上部リンク遷移先 -->
	<h2>SHOP 作成ページ</h2>
	<form action="{{ action('App\Http\Controllers\ShopAdminController@store') }}" method='post' enctype="multipart/form-data">
		{{ csrf_field() }}
			店名：<input type='text' name='name'><br>
			メールアドレス：<input type='text' name='email'><br>
			代表番号：<input type='text' name='tel' value=""><br>
			担当者：<input type='text' name='manager' value=""><br>
			郵便番号：<input type='text' name='zip_code_jp' value=""><br>
			都道府県：<input type='text' name='prefecture' value=""><br>
			市区町村：<input type='text' name='city' value=""><br>
			地名番地：<input type='text' name='unique_name' value=""><br>
			メイン画像：<input type='file' name='images01' accept=".jpeg,.jpg,.png"><br>
			追加画像1：<input type='file' name='images02' accept=".jpeg,.jpg,.png"><br>
			追加画像2：<input type='file' name='images03' accept=".jpeg,.jpg,.png"><br>
			紹介文：<input type='text' name='introduction_text' value=""><br>
			<input  type='hidden' name='shop_id' value="{{ $shop['id'] }}">
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
