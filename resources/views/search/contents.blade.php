@extends('layouts.app')
@section('content')
<div class="mt-4">
    <div class="container">
        <div class="card-header"><p class="card-title" style="font-family:serif; text-align:center;font-weight:bolder;">{{ $datacounts }}</p></div> 
        <div class="card-body">
             @foreach($datas as $data)
                <div class="pb-5">
                　<img src="{{asset('storage/public/picture/' . $data->picture)}}" class="rounded float-left" width="100%" height="180">
                  <div class="card">
                   <div class="card-body">
                     <h5 class="card-title">{{ $data->title }}</h5>
                   </div>
                   <ul class="list-group list-group-flush">
                       <li class="list-group-item">大陸名:{{ $data->continent}}</li>
                       <li class="list-group-item">国名:{{ $data->country }}</li>
                       <li class="list-group-item">費用:￥{{ $data->costs }}</li>
                       <li class="list-group-item">滞在期間:{{ $data->span }}日間</li>
                       <li class="list-group-item"><p class="card-text">内容;<br>{{ $data->content }}</p></li>
                       <li class="list-group-item"><span class="text-muted">投稿時間 {{ $data->created_at }}</span></li>
                       <li class="list-group-item">{{ link_to_route('content.show' , '詳細' , $data->id , ["class"=>"btn btn-primary"]) }}</li>
                   </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
