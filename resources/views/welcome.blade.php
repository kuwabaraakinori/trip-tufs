@extends(layouts.app)

@section('content')
    @if(Auth:check())
       <div class="row">
           <div class="offset-sm-4 col-sm-8">
               @include('contents.contents')
           </div>
       </div>
    @else
       <div class="jumbotron">
           <div class="container">
               <a href="/海外3.jpg" style='height:200px; width:500px;'></a>
           </div>
       </div>
    @endif
@endsection