@extends(layouts.app)

@section(content)
  <div class="container">
      <div class="col-sm-4">
          <form class="form-inline" action="{{url('')}}">
               <div class="form-group">
                   <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="国名を入力してください">
                   <input type="submit" value="検索" class="btn btn-info">
               </div>
          </form>
      </div>
      <div class="col-sm-8">
          <form class="form-group row">
              <ul class="continents-list">
                  <li class="Asia"><a href="" placeholder='アジア'>></a></li>
                  <li class="Europe"></li>
                  <li class="Africa"></li>
                  <li class="Ratin Ameriaca"></li>
                  <li class="Oseania"></li>
              </ul>
          </form>
      </div>
       
  </div>
@endsection