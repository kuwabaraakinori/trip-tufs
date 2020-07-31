@extends('layouts.app')
@section('content')
<div class="wrapper">
    <div class="col-sm-10">
        <div class="title"><h2 style="font-family:serif; font-weight:bolder; text-align:center;">お問い合わせフォーム</h2></div>
        <form action="{{ route('contact.confirm')}}"  method="post" >
             @csrf
            <div class="form-group">
                  {!! Form::label('email', 'メールアドレス') !!}
                  {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                  {!! Form::label('name', '名前') !!}
                  {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">内容</label>
                <textarea class="form-control" rouw=10 name="content">{{ old('content') }}</textarea>
            </div>
            <div>
                <button value="submit" class="btn btn-success btn-lg btn-block">確認</button>
            </div>
        </form>
    </div>
</div>
@endsection