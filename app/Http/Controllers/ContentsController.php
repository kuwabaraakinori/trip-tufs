<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function index()
    {
        $data=[];
        if(\Auth::check()){//認証済みの場合
          //認証済みの
         $user=\Auth::user();
         //ユーザーの投稿の一覧を作成日時の降順で所得
         $contents = $user->feed_contents()->orderBy('created_at' , 'desc')->paginate(10);
         
         $data=[
             'user'=>$user,
             'contents'=>$contents,
             ];
            
        }
        return view('welcome' , $data);
    }
    
    public function store(Request $request)
    {
        //バリデーション
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required|max:500',
            'picture' =>'required'|'dimensions:width=320,height=240',
            'span' => 'required',
            'cost' => 'required',
        ]);
        
        $request->user()->contents()->create([
            'title' => $request->title,
            'content' => $request->content,
            'picture' => $request->picture,
            'span' => $request->span,
            'cost' => $request->cost,
        ]);
        
        return back();
    }
    
    public function  destroy($id)
    {
        //idの値で投稿を検索して所得
        $content=\App\Content::findOrFail($id);
        
        //認証済みのユーザーがあおの投稿の所有者である場合は、投稿を削除
        if(\Auth::id() === $content->user_id)
        {
            $content->delete();
        }
        
        return back();
    }
    
    public function show ()
    {
        
    }
}
