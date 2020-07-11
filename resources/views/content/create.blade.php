@extends('layouts.app')
@section('content')
{!! Form::open(['route' => 'content.store' , 'method'=>'post']) !!}
     @csrf
     <div class="row">
         
         <div class="form-control">
             {!! Form::label('title' , 'タイトル')  !!}
             {!! Form::text('title' , old('text') , ['class' => 'form-control']) !!}
         </div>
         
         <div class="form-control">
             {!! Form::label('continent' , '大陸名') !!}
             {!! Form::select('continent' , ['指定なし' => '指定なし'] + Config::get('continent.continent') , null , ['class'=>'form-control']) !!}
         </div>
         
         <div class="form-control">
             {!! Form::label('country' , '国名') !!}
             {!! Form::text('country' , old('country') , ['class' => 'form-control'] ) !!}
         </div>
         
         <div class="form-control">
              {!! Form::label('span' , '期間') !!}
              {!! Form::text('span' , old('span') , ['class'=>'form-control' , 'placeholder'=>'半角で入力'] ) !!}
         </div>
         
         <div class="form-control">
              {!! Form::label('costs' , '費用') !!}
              {!! Form::text('costs' , old('costs') , ['class'=>'form-control' , 'placeholder'=>'半角で入力'] ) !!}
         </div>
         
         <div class="form-control">
              {!! Form::label('content' , '内容') !!}
              {!! Form::textarea('content' , old('content') , ['class' => 'form-control', 'row' => '4']) !!}
         </div>
         
         <div class='custom-file'>
              {!! Form::file('picture',  null , ['class' => 'custom-file-input']) !!}
              {!! Form::label('ファイルを選択' ,  null ,['class' => 'custom-file-label' ,  'data-browse' => '参照']) !!}
         </div>
         {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block' ]) !!}
         
     </div>  
{!! Form::close() !!}
@endsection