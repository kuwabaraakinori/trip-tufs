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
                  <li class="nav-item dropdown">
                      <a href="#" class="nav link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name }}</a>
                      <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item">{!! link_to_route('users.show' , '投稿一覧' , ['user' => Auth::id()]) !!}</li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item">{!! link_to_route('search' , '検索' , []) !!}</li>
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
                   {{-- 検索ページへのリンク --}}
                   <li class="nav-item">{!! link_to_route('search' , '検索' , [] , ['class' => 'nav-link']) !!}</li>
                  @endif
              </ul>
         </div>
    </nav>
</header>