@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            @if(Auth::id() == $user->id)
            {{-- ユーザの投稿一覧 --}}
            @include('contents.contents')
            
            @endif
        </div>
    </div>
@endsection