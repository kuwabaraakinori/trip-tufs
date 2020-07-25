@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-title" style="text-center"><h2>{{$message}}</h2></div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
　@endif
  <div class="card-body">
     <form action="{{route('content.update' , $content->id )}}" method="put"　enctype="multipart/form-data">
          @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">タイトル</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="input your title" name="title" value='{{old('title' , $content->title )}}'>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">大陸名</label>
          <select class="form-control" id="exampleFormControlSelect1" name="continent" value='{{old('continent' , $content->continent)}}'>
            <option>アジア</option>
            <option>北アメリカ</option>
            <option>中南米</option>
            <option>ヨーロッパ</option>
            <option>アフリカ</option>
            <option>オセアニア</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">国名</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="日本" name="country" value='{{old('country' , $content->country)}}'>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">滞在期間</label>
          <select class="form-control" id="exampleFormControlSelect1" name="span" placeholder="滞在期間を選択" value='{{old('span' , $content->span)}}'>
            <option value=''>選択してください</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
          　<option>12</option>
          　<option>13</option>
          　<option>14</option>
          　<option>15</option>
          　<option>16</option>
          　<option>17</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">費用</label>
          <select class="form-control" id="exampleFormControlSelect1" name="costs" placeholder="金額を選択" value='{{old('costs' , $content->costs)}}'>
            <option value=''>選択してください</option>
            <option>10000</option>
            <option>30000</option>
            <option>50000</option>
            <option>70000</option>
            <option>100000</option>
            <option>150000</option>
            <option>200000</option>
            <option>250000</option>
            <option>300000</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">写真</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture" value='{{old('picture' , $content->picture)}}'>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">コンテンツ</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content" >{{old('content' , $content->content)}}</textarea>
        </div>
        <input type="hidden" name="user_id" value="{{Auth::id()}}">
        <button type="submit" class="btn btn-success btn-lg btn-block">更新</button>
        {{ link_to_route('index' , '戻る' , null , ['class'=>'btn btn-info btn-lg btn-block']) }}
      </form>
  </div>
</div>
@endsection