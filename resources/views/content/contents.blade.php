@if(count($contents)>0)
<div class="container">
    <div class="row">
        <div class="card-columns">
        @foreach($contents as $content)
        <div class="mb-5">
        　<img src="{{asset('storage/public/picture/' . $content->picture) }}" class="rounded float-left" width="95%" height="180">
          <div class="card" style="width: 22rem;">
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
           </ul>
           <div class="row">
               <div class="col">
                  {!! Form::open(['route'=>['content.show' , $content->id] , 'method'=> 'get' ]) !!}
                  {!! Form::submit('詳細' , ['class'=>'btn btn-primary']) !!}
                  {!! Form::close() !!}  
               </div>
               @if(Auth::id() == $content->user_id)
               <div class="col">
                   {!! Form::open(['route' => ['content.edit' , $content->id] , 'method' => 'get']) !!}
                   {!! Form::submit('編集', ['class' => 'btn btn-success']) !!}
                   {!! Form::close() !!}  
               </div>
               <div class="col">
                   {!! Form::open(['route' => ['content.destroy', $content->id], 'method' => 'delete']) !!}
                   {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                   {!! Form::close() !!} 
               </div>
               @endif
           </div>
           </div>
        </div>
       @endforeach
    </div>
    </div>
</div>
{{ $contents->links() }}
@endif

