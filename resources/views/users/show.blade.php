@extends('layouts.app')
@section('content')
<div class="pb-4">
    <div class="container">
        @if(Auth::id() ===  $user->id)
          @if(count($contents)>0)
          <div class="card-header"><p class="card-title" style="font-family:serif; text-align:center;font-weight:bolder;">{{ $datacounts }}</p></div>
            @foreach($contents as $content)
            <div class="mb-5">
                <div class="card">
                    <img src="{{asset('storage/public/picture/' . $content->picture)}}" class="rounded float-left" width="100%" height="130">
                    <div class="card-body">
                        <h5 class="card-title">{{ $content->title }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">大陸名:{{ $content->continent}}</li>
                        <li class="list-group-item">国名:{{ $content->country }}</li>
                        <li class="list-group-item">費用:￥{{ $content->costs }}</li>
                        <li class="list-group-item">滞在期間:{{ $content->span }}日間</li>
                        <li class="list-group-item"><p class="card-text">内容;<br>{{ $content->content }}</p></li>
                        <li  class="list-group-item"><span class="text-muted">投稿時間 {{ $content->created_at }}</span></li>
                        <li class="list-group-item"> 
                            {!! link_to_route('content.edit', '編集', $content->id, ['class' => 'btn btn-success']) !!}
                            {!! Form::open(['route' => ['content.destroy', $content->id], 'method' => 'delete']) !!}
                            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!} 
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
          @else
           <div class="card-header"><p class="card-title" style="font-family:serif; text-align:center;font-weight:bolder;">{{ $datacounts }}</p></div> 
          @endif 
        @endif
    </div>
</div>
{{ $contents->links()}}
@endsection