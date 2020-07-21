<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class SearchController extends Controller
{
     public function __construct()
    {
        $this->middleware('guest');
    }
    

    public function index(Request $request)
    {
         if(!empty($request->keyword)){
            $query= Content::query();
        
            $datas = Content::where('continent', 'like' , "%{$request->keyword}%")
                           ->orWhere('country',  'like' ,  "%{$request->keyword}%")
                           ->get(); 
            $datacounts = $request->keyword.'の検索結果一覧'.count($datas).'件';
            

            
            /*$datas=$query->orderby('created_at' , 'desc')->paginate(4);*/

            return view('search.contents' , [
                'datas'=>$datas ,
                'datacounts'=>$datacounts
                ]);
            }
        else{
            return redirect('/');
        }
       
    }
}
