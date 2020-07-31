@extends('layouts.app')
@section('content')
<div class="wrapper">
    <div class="col-sm-8">
        <form action="{{ route('contact.send') }}"  method="post"  enctype="multipart/form-data">
            @csrf
        <div class="main">
            <div class="form-title"><h2 style="font-family:serif; font-weight:bolder; text-align:center;">確認画面</h2></div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">メールアドレス</label>
                <div class="form-control">
                    {{ $email }}
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">名前</label>
                <div class="form-control">
                    {{ $name }}
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">内容</label>
                <div class="form-control">
                    {{ $content }}
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block">送信</button>
        {{ link_to_route('contact.index' , '修正する' , null , ['class'=>'btn btn-info btn-lg btn-block']) }}
        </form>
    </div>
</div>
@endsection