@extends('layouts.app')
 
@section('content')
    <p>詳細ページです</p>
    <table class="table table-striped">
  <thead>
    <tr>
      <th>ショップID</th>
      <th>店名</th>
      <th>作成日</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $shop->id }}</td>
      <td>{{ $shop->name }}</td>
      <td>{{ $shop->created_at }}</td>
    </tr>
  </tbody>
</table>
@endsection

