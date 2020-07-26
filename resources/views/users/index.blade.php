@extends('layouts.app')
@section('content')
@if (count($users)>0)
    <h2><div class="card-header" style="font-family:serif; font-weight:bolder; text-align:center;">ユーザー一覧表示</div></h2>
        <ul class="list-unstyled">
      <table class="table table-sm table-dark">
        <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Created Time</th>
          <th scope="col">Post Count</th>
        </tr>
        </thead>
        @foreach ($users as $user)
        <tbody>
        <tr style="margin:5px 0px;">
          <td scope="col">{{ $user->id }}</td>
          <td scope="col">{{ $user->name }}</td>
          <td scope="col">{{ $user->created_at }}</td>
          <td scope="col">{{ $userdatacounts }}</td>
        </tr>
        </tbody>
         @endforeach
      </table>
      </ul>
@endif
{{ $users->links() }}
@endsection