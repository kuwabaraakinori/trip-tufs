@extends('layouts.app')
@section('content')
<div class="text-center">
	<h2>検索</h2>
</div>
<div class="container">
	<div class="col-sm-6">
		
	{!! Form::open(['route'=>'search' , 'method'=>'get']) !!}
	
	  <div class="form-group" >
		{!! Form::label('text' , '国名') !!}
		{!! Form::input('search', old('country'), null , ['class'=>'form-control']) !!}
	  </div>
	  
	  <div class="form-group">
		{!! Form::label('text' , '州名') !!}
		{!! Form::select('continent' , ['指定なし' => '指定なし'] + Config::get('continent.continent') , null , ['class' => 'form-control']) !!}
	  </div>
	  
	    {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    </div>
</div>
@endsection