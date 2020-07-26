<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    public function index()
   {
       if(\Auth::check())
       {
           $users = User::orderby('created_at' , 'asc')->paginate(10);
           $contents = \App\Content::get();

           $userdatacounts = $users->name. 'さんの投稿件数' . count($contents)  . '件';
           dd($userdatacounts);
       }
       
       return view('users.index' , [
               'users' => $users,
               'userdatacounts'=>$userdatacounts
               ]);
       
   }
   
   public function show()
   {
       //idの値でユーザーを検索して所得
       $user = \Auth::user();

       
       $contents = $user->content()->orderby('created_at' , 'desc')->paginate(10);
       

       $datacounts = $user->name.'さんの投稿件数'.count($contents).'件';
       
       return view('users.show' , [
           'user' =>$user,
           'contents' =>$contents,
           'datacounts'=>$datacounts
           ]);
       
       
   }
  
}
