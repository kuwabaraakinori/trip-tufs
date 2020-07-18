@extends('layouts.app')
@section('content')
 <div class="card col-md-10" style="width: 40rem;">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
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
@endsection