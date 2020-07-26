@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-title">
    <h2 class="container" style="font-family:serif; font-weight:bolder; text-align:center;">詳細画面</h2>
    </div>
    <div class="card">
        <div class="col-md-10">
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
                <li class="list-group-item">{{ link_to_route('index' , '戻る' , null , ['class'=>'btn btn-info btn-lg btn-block']) }}</li> 
            </ul>
        </div>
    </div>
</div>
@endsection