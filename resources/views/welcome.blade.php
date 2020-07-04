@extends(layouts.app)

@section('content')

    @if(Auth::id() == $contents->user_id)
     <div class="container">
         <div class="col-sm-6">
            @include('users.show')
         </div>
     </div>
    @else
      <div class="container">
         <div class="col-sm-6">
            {-- 投稿一覧を表示する --}
           @include('contents.contents')
         </div>
      </div>
    @endif
@endsection

 