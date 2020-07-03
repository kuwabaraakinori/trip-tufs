@extends(layouts.app)

@section('content')
   @if(Auth::check())
   @else
     
     @include('contents.contents')
   
   @endif


    
@endsection

 