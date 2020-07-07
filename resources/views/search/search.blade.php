@extends('layouts.app')
<div class="container">
	<div class="col-sm-8">
	  {!! Form::open(['method' => 'GET']) !!}
	  <div class="form-group">
		{!! Form::label('text' , '国名') !!}
		{!! Form::input('search', 'country', array('placeholder'=>'国名で検索')) !!}
	  </div>
	  <div class="form-group">
		{!! Form::label('text' , '州名') !!}
		{!! Form::select('continent' , [アジア, ヨーロッパ , オセアニア ,アフリカ ,北アメリカ ,南アメリカ ] , null , [class => 'form-control']) !!}
	  </div>
	    {!! Form::submit('Search', array('class' => 'btn btn-primary')) !!}
        {!! Form::close() !!}
     </div>
</div>