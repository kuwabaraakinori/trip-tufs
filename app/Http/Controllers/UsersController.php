<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
   public function index()
   {
       $users=User::orderby('id' , 'name' ,'desc')->paginate(10);
        
        return view('users.index' , [
            'users'=>$users,
            ]);
   }
   
   public function show()
   {
       //idの値でユーザーを検索して所得
       $user = User::findOrFail($id);
       
       $contents = $user->feed_contents()->orderby('created_at' , 'desc')->paginate(10);
       
       return view('users.show' , [
           'user' =>$user,
           'contents' =>$contents,
           ]);
       
       
   }
}
