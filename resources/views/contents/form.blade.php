{{!! Form::open(['route' => 'contents.store']) !!}
     <div class="form-group">
         {!! Form::text('title' , null , ['class' => 'form-control']) !!}
         {!! Form::select('continent' , null , ['北アメリカ大陸'=>'北アメリカ' , '中南米大陸'=>'中南米' , 'ヨーロッパ大陸'=>'ヨーロッパ' , 'アフリカ地域'=>'アフリカ' , 'アジア地域'=>'アジア' , '中東地域'=>'中東' , 'オセアニア地域'=>'オセアニア' , ]) !!}  
         {!! Form::text('country' , null ,['class' => 'form-control'] ) !!}　　
         {!! Form::text('span' , null , ['class'=>'form-control' , 'placeholder'=>'半角で入力'] , ) !!}
         {!! Form::text('cost' , null , ['class'=>'form-control'] , 'placeholder'=>'半角で入力') !!}
         {!! Form::textarea('content' , null , ['class' => 'form-control', 'row' => '4']) !!}
         <div class='custom-file'>
         {!! Form::file('picture',  null , ['class' => 'custom-file-input']) !!}
         {!! Form::label('ファイルを選択' ,  null ,['class' => 'custom-file-label' ,  'data-browse' => '参照']) !!}
         </div>
         //投稿ボタン
         {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block' ]) !!}
     </div>  
{!!  Form::close() !!}