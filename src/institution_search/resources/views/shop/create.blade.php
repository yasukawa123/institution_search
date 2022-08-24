@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container">
	<!-- 上部リンク遷移先 -->
	<h2>plan 登録詳細ページ</h2>
	<form action="{{ action('App\Http\Controllers\ShopController@store') }}" method='post'>
		{{ csrf_field() }}
			<input  type='hidden' name='user_id' value="{{ $user['id'] }}">
			<input type='hidden' name='shop_id' value="{{ $shopPlan->shop_id }}">
			<input type='hidden' name='shop_plan_id' value="{{ $shopPlan->id }}">
			RESERVE_DATE：<input type='text' name='reserve_date'><br>
			check_in<input type='text' name='check_in' value=""><br>
			num<input type='text' name='num' value=""><br>
			num_small<input type='text' name='num_small' value=""><br>
			<input type='hidden' name='filled_up' value=1>
			<input type='submit' value='登録'>
	</form>
</div>
@endsection
