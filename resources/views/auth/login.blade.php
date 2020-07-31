@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1 style="font-family:serif; text-align:center; margin-top:20px;">ログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
          
          {!! Form::open(['route' => 'login.post']) !!} 
             <div class="form-group">
               {!! Form::label('email', 'Email') !!}
               {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
               {!! Form::label('password', 'Password') !!}
               {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
        
           <h6 style="font-family:serif; text-align:center; margin-top:20px;"><a href ="{{ route('signup.get') }}">ユーザー登録がまだの方</a></h6>
             @if (Route::has('password.request'))
                <h6 style="font-family:serif; text-align:center; margin-top:20px;"><a href= "{{ route('password.request') }}">パスワードをお忘れの方</a></h6>
             @endif

        {!! Form::close() !!} 
        </div>
    </div>
@endsection

