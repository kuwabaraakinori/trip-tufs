@extends('layouts.app')
@section('content')
<div class="row">
    <div class="card col-md-10" style="width: 40rem;">
　　<img src="{{asset('storage/picture/' . $content->picture) }}" class="rounded float-left" width="100%" height="200">   
　　<div class="card-body">
        <h5 class="card-title">{{ $content->title }}</h5>
        <p class="card-text">{{ $content->content }}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">大陸名:{{ $content->continent}}</li>
        <li class="list-group-item">国名:{{ $content->country }}</li>
        <li class="list-group-item">費用:￥{{ $content->costs }}</li>
        <li class="list-group-item">滞在期間:{{ $content->span }}日間</li>
    </ul>
    </div>
</div>
@endsection