<div class="jumbotron">
@if(count($contents)>0)
    <ul class="list-unstyled">
        @foreach ($contents as $content)
           <li class="media">
               <div class="media-body">
                   <div="col-sm-2">
                       <p>{!! $content->user_id !!}</p>
                       <p>{!! $content->title !!}</p>
                       <p>{!! $content->span !!}</p>
                       <p>{!! $content->cost !!}</p>
                   </div>
                   <div class="col-sm-6">
                       {{-- 投稿内容 --}}
                       <p>{!! nl2br(e($content->content)) !!}</p>
                   </div>
                   <div>
                        @if (Auth::id() == $content->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['contents.destroy', $content->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
               </div>
           </li>
        @endforeach
    </ul>
@endif  
</div>