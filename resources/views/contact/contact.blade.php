@extends('layouts.app')
@section('content')
<div class="wrapper">
    <div class="container">
        <div class="title"><h2 style="font-family:serif; font-weight:bolder; text-align:center;">お問い合わせフォーム</h2></div>
        <form class="main" action="{{ route('contact.confirm')}}"  method="post" type="textarea">
            <div class="form-group">
                <select class="form-control" name="topic"></select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">内容</label>
                <textarea class="form-control" rouw=10 name="content">{{ old('content') }}</textarea>
            </div>
        </form>
    </div>
</div>
    <button value="submit" class="btn btn-primary btn-lg btn-block">送信</button>
</div>
@endsection