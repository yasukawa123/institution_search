@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">マイページ
                    </div>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: white">
                            <td>氏名</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr style="background-color: white">
                            <td>メール</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr style="background-color: white">
                            <td>生年月日</td>
                            <td>{{ $user->birthdate }}</td>
                        </tr>
                        <tr style="background-color: white">
                            <td>電話番号</td>
                            <td>{{ $user->tel }}</td>
                        </tr>
                        <tr style="background-color: white">
                            <td>住所</td>
                            <td>{{ $user->zip_code . " " . $user->prefecture . $user->city . $user->unique_name}} </td>
                        </tr>
                        </thead>                    
                    </table>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">予約情報
                    </div>
                    <table width="100%" border="0">
                        <thead>
                        <tr style="background-color: white">
                            <td>予約場所</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr style="background-color: white">
                            <td>予約日</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr style="background-color: white">
                            <td>予約内容</td>
                            <td>{{ $user->birthdate }}</td>
                        </tr>
                        </thead>                    
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

