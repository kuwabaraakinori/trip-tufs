@extends('layouts.app')
@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="col-sm-8">
            <h1>{{ __('送信完了') }}</h1>
            <div class="container">
                <p class="mt-2">お問い合わせありがとうございます。</p>
            </div>
            {{ link_to_route('index' , 'トップへ戻る' , null , ['class'=>'btn btn-info btn-lg btn-block']) }}
        </div>
    </div>
</div>
@endsection