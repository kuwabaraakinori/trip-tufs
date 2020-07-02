<header class= 'mb-4'>
    <nav class='navbar navbar-expand-sm navbar-dark bg-secondary'>
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href='/'>Tufs-Tours</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
         <span class="navbar-toggler-icon"></span>
        </button>
        
         <div class="collapse navbar-collapse" id="nav-bar">
              <ul class="navbar-nav mr-auto"></ul>
              <ul class="navbar-nav">
                  @if(Auth::check())
                  <li class-"nav-item">{!! !!}</li>
                  <li class="nav-item dropdown">
                      <a href="#" class="nav link dropdown-toggle" data-toggle="dropdown">{{  }}</a>
                      <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item">{{!! link_to_route('' , '投稿一覧' , []) !!}}</li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item">{{!! link_to_route('' , '検索' , []) !!}}</li>
                          <li class="dropdown-divider"></li>
                          {{-- ログアウトへのリンク  --}}
                          <li class="dropdown-item">{{!! link_to_route('logout.get', 'Logout') !!}}</li>
                      </ul>
                  </li>
                  @else
                   {{-- ユーザー登録へのリンク --}
                   <li class="nav-item">{!! link_to_route('signup.get' , 'Signup' , [] , ['class' => 'nav-link']) !!}</li>
                   {{-- ログインページへのリンク --}}
                   <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                   {{-- 検索ページへのリンク --}}
                   <li class="nav-item">{!! link_to_route('' , 'Search' , [] , ['class' => 'nav-link']) !!}</li>
              </ul>
         </div>
    </nav>
</header>