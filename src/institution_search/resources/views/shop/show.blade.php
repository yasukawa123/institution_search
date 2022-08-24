<<<<<<< HEAD
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $shop->name }}
                    </div>
                    <div class="card-body">
                        {{ $shop->images }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

=======
@extends('layouts.header_footer')
@section('head')
<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/shop.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
	<div class="container">
	<!-- 上部リンク遷移先 -->
	<p><a href="/">トップ</a> > <a href="/shop">ショップリスト</a> > {{ $shop->name }} </p>
		<h1> {{ $shop->name }} </h1>
		<h3> show 施設の紹介 </h3>
		<p> {{ $shop->introduction_text }} </p>
		<div class="center">
			@foreach ($shopPlans as $shopPlan)
			<a href="/plan={{ $shopPlan->id }}/shop={{ $shop->id }}">
			<div class="shop-card">
				<!-- 画像 -->
				<div class="shop-card-left">
					<img src="{{ asset($shopPlan->image01) }}">
				</div>
				<!-- タイトル -->
				<div class="shop-card-right">
					<div class="shop-card-right-top">
						<p>id確認用：{{ $shopPlan->id }}</p>
						<div class="shop-card-right-title">
							<p>プランの名前追加</p>
						</div>
							<p>shop_id確認用：{{ $shopPlan->shop_id }}</p>
						<!-- 県 -->
						<div class="shop-card-right-tag">
							<p>{{ $shopPlan->price }}</p>
						</div>
						<!-- 紹介文 -->
						<div class="shop-card-right-text">
							<p></p>
						</div>
					</div>
				</div>
			</div>
			</a>
			@endforeach
		</div>
		<h4>アクセス</h4><br>
		<p>{{ $shop->zip_code_jp . " " . $shop->prefecture . $shop->city . $shop->unique_name}}</p><br>
		<h4>連絡先</h4><br>
		<p>{{ $shop->name }}</p><br>
		<p>{{ $shop->email }}</p><br>
		<p>{{ $shop->tel }}</p>
	</div>
@endsection
>>>>>>> feature-make-design_site
