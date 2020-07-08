@('layouts.app')
@section('content')
{!! Form::open(['route' => 'contents.store' , 'method'=>'post']) !!}
     <div class="form-group">
         {!! Form::text('title' , old('text') , ['class' => 'form-control']) !!}
         {!! Form::select('continent' ,['指定なし' => '指定なし'] + Config::get('continent.continent') , null ,['class'=>'form-control']) !!}  
         {!! Form::text('country' , old('country') ,['class' => 'form-control'] ) !!}　　
         {!! Form::text('span' , null , ['class'=>'form-control' , 'placeholder'=>'半角で入力'] , ) !!}
         {!! Form::text('cost' , null , ['class'=>'form-control'] , 'placeholder'=>'半角で入力') !!}
         {!! Form::textarea('content' , old('content') , ['class' => 'form-control', 'row' => '4']) !!}
         <div class='custom-file'>
         {!! Form::file('picture',  null , ['class' => 'custom-file-input']) !!}
         {!! Form::label('ファイルを選択' ,  null ,['class' => 'custom-file-label' ,  'data-browse' => '参照']) !!}
         </div>
         //投稿ボタン
         {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block' ]) !!}
     </div>  
{!!  Form::close() !!}
@endsection