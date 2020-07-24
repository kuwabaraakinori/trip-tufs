@extends('layouts.app')
@section('content')
<div class="pb-4">
    <div class="card col-md-10" style="width: 22rem;">
        <div class="container">
            @if(Auth::id() ===  $user->id)
                @foreach($contents as $content)
                <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
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
                @endforeach
            @endif
        </div>
    </div>
</div>
{{ $contents->links() }}
@endsection