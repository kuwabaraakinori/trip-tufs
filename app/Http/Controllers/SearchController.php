<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //クエリの作成
         $query = \App\Content::query();
         //キーワードの受け取り
         $country=$request->input('country');
         $continet=$request->input('continent');
         
         if(!empty($country))
         {
             $query->where('country' , '%'.$keyward.'%');
         }
         if($request->has('continent'))
         {
             $query->where('continent');
         }
         //ページネーション
         $data=$query->orderBy('created_at','desc')->paginate(10);
         
         return view('search.search' , [
             'contents' => $data,
             ]);
        
    }
}
