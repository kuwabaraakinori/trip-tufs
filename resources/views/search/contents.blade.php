@extends('layouts.app')
@section('content')
<div class="mt-4">
    <div class="container">
        <div class="card-columns">
            <div class="card">
                <div class="card-title">{{ $datacounts }}</div>
                @foreach($datas as $data)
                    <div class="card-body" style="background-color:red;">
                        <h5 class="card-title">{{ $data->title }}</h5>
                        <div class="card-item">{{ $data->continent }}</div>
                        <div class="card-item">{{ $data->country }}</div>
                        <div class="card-item">{{ $data->span}}</div>
                        <div class="card-item">{  $data->costs}}</div>
                        <p class="card-text">{{  $data->content}}</p>
                    </div>
               @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
