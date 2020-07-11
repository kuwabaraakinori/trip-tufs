<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
   
    public function index()
    {
        $contents=Content::all();
        
        return view("welcome" , [
            "contents"=>$contents
            ]);
    }

    
    public function create()
    {
        return view('content.create');
    }

    public function store(Request $request)
    {
        
    }

   
    public function show(Content $content )
    {
        return view('content.show' , [
         'content'=>$content
         ]);
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
