@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            @foreach ($shops as $shop)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">{{ $shop->name }}</div>
                    <div class="card-body">
                        {{ $shop->images }}
                    </div>
                    <div class="card-body">
                        {{ $shop->prefecture }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

