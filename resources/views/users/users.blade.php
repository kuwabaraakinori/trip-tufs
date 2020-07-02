@if (count($user)>0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
           <li class="media">
               <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="">
               <div class="media-body">
                   <div>
                       {{ $user->name }}
                   </div>
                   <div>
                       {{-- ユーザー詳細ページへのリンク --}}
                       <p>{!! link_to_route('' , '投稿を見る' , ['user' => $user-id]) !!}</p>
                   </div>
               </div>
           </li>
        @endforeach
    </ul>
    {{ $users->links() }}
@endif