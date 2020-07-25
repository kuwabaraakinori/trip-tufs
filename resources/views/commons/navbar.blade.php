<style type="text/css">
     .jumbotron {
         background:url("https://vps13-d-cdn.aquapal.net//thumbs/20200723-0820_70725432a26198b2d50eb199b01e62b1.jpg") center no-repeat; 
         background-size: cover; 
         height:250px; 
         margin-top: 0px;
     }
</style>
<header class= 'mb-4'>
    <div class="pb-5">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href='/'>Tufs-Tours</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
         <span class="navbar-toggler-icon"></span>
        </button>
        
         <div class="collapse navbar-collapse" id="nav-bar">
              @if(Auth::check())
               <form class="form-inline" action="{{route('loginsearch')}}" method="get">
                  @csrf
                <input class="form-control mr-sm-2" type="text" name="keyword" value="" placeholder="Continent or Country " aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
               </form>
              @else
                <form class="form-inline" action="{{route('search')}}" method="get">
                  @csrf
                <input class="form-control mr-sm-2" type="text" name="keyword" value="" placeholder="Continent or Country " aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
              　</form>
              @endif
              <ul class="navbar-nav mr-auto"></ul>
              <ul class="navbar-nav">
                  @if(Auth::check())
                  <li class="nav-item dropdown">
                      <a href="#" class="nav link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name }}</a>
                      <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item">{!! link_to_route('users.show' , '投稿一覧' , ['user' => Auth::id()]) !!}</li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item">{!! link_to_route('content.create' , '投稿する') !!}</li>
                          <li class="dropdown-divider"></li>
                          {{-- ログアウトへのリンク  --}}
                          <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                      </ul>
                  </li>
                  @else
                   {{-- ユーザー登録へのリンク --}}
                   <li class="nav-item">{!! link_to_route('signup.get' , '登録' , [] , ['class' => 'nav-link']) !!}</li>
                   {{-- ログインページへのリンク --}}
                   <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                  @endif
              </ul>
         </div>
        </nav>
    </div>
    <div class="jumbotron">
    </div>
</header>