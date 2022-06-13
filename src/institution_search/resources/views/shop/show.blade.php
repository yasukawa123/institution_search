@extends('layouts.app')
 
@section('content')
    <p>詳細ページです</p>
    <table class="table table-striped">
  <thead>
    <tr>
      <th>ショップ画像</th>
      <th>ショップID</th>
      <th>店名</th>
      <th>ショップ説明</th>
      <th>住所</th>
      <th>ショッププラン</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $shop->images }}</td>
      <td>{{ $shop->id }}</td>
      <td>{{ $shop->name }}</td>
      <td>{{ $shop->introduction_text }}</td>
      <td>{{ $shop->prefecture }} {{ $shop->city }}{{ $shop->unique_name }}</td>
      <td>{{ $shop->shop_plan_id }}</td>
    </tr>
  </tbody>
</table>
@endsection

