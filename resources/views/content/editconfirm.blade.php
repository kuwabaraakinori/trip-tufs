@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-title">
        <h2 style="font-family:serif; background-color:#E6E6E6; text-shadow:2px 2px 1px #B4B4B4 ; font-weight:bolder;  text-align:center;">{{ $message }}</h2>
    </div>
    <div class="card col-md-10" style="width: 21rem;">
　　<img src="{{asset('storage/public/picture/' . $content->picture) }}" class="rounded float-left" width="100%" height="200">   
　　<div class="card-body">
        <h5 class="card-title">{{ $content->title }}</h5>
        <p class="card-text">{{ $content->content }}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">大陸名:{{ $content->continent}}</li>
        <li class="list-group-item">国名:{{ $content->country }}</li>
        <li class="list-group-item">費用:￥{{ $content->costs }}</li>
        <li class="list-group-item">滞在期間:{{ $content->span }}日間</li>
        <li class="list-group-item">
         {!! link_to_route('index', '戻る', $content->id, ['class' => 'btn btn-info']) !!}
        </li>
    </ul>
    </div>
</div>
@endsection