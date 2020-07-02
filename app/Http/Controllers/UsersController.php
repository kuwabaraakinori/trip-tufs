<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
   public function index()
   {
       $users=User::orderby('id' , 'desc')->paginate(10);
        
        return view('users.index' , [
            'users'=>$users,
            ]);
   }
   
   public function show()
   {
       
   }
}