<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class SearchController extends Controller
{
    

    public function index(Request $request)
    {
         if(!empty($request->keyword)){

            $datas = Content::where('continent', 'like' , "%{$request->keyword}%")
                           ->orWhere('country',  'like' ,  "%{$request->keyword}%")
                           ->orderby('created_at' , 'desc')
                           ->get();

            $datacounts = $request->keyword.'の検索結果'.count($datas).'件';
            
            $contents = Content::orderby('created_at' , 'desc')->paginate(6);

            return view('search.contents' , [
                'datas'=>$datas ,
                'datacounts'=>$datacounts,
                'contents'=>$contents
                ]);
            }
        else{
            return redirect('/');
        }
       
    }
}
