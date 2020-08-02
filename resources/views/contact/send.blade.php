@extends('layouts.app')
@section('content')
<div class="wrapper" style="text-align:center; float:center;">
    <div class="offset-col-2 container">
        <div class="col-sm-8">
            <h1 style="font-family:serif; font-weight:bolder; text-align:center;">{{ __('送信完了') }}</h1>
            <div class="container">
                <p class="mt-2">お問い合わせありがとうございます。</p><br>
                <p>数日ほど返信にお時間有しますがご了承ください。</p>
            </div>
            {{ link_to_route('index' , 'トップへ戻る' , null , ['class'=>'btn btn-info btn-lg btn-block']) }}
        </div>
    </div>
</div>
@endsection