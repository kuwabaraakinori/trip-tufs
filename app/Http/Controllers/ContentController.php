<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
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

    public function store(ContentRequest $request)
    {
        dd($request->file('picture'));
        if ($request->file('picture')->isValid()){
            
            $content =new Content;
        
            $content->user_id = $request->user_id;
            $content->content = $request->content;
            $content->title = $request->title;
            $content->span = $request->span;
            $content->continent = $request->continent;
            $content->country = $request-> country;
            $content->costs = $request->costs;
            
            
            $filename=$request->file('picture')->store('public/picture');
            
            $content->picture = basename($filename);
            
            
            
            /*
            if(!isset($data['picture'])){
                array_set($data , 'picture' ,basename($filename) );
            }
            */
            
            
          $content->save();

        }
        return redirect('/');
    }

   
    public function show(Content $content )
    {
        return view('content.show' , [
         'content'=>$content
         ]);
    }

    
    public function edit($content_id)
    {
      $content = Content::findOrFail($content_id);
      
      return view('content.edit' , [
          'content'=>$content,
          ]);
    }

   
    public function update(ContentRequest $request, $id)
    {
         if ($request->file('picture')->isValid()){
            
            $content =new Content;
        
            $content->user_id = $request->user_id;
            $content->content = $request->content;
            $content->title = $request->title;
            $content->span = $request->span;
            $content->continent = $request->continent;
            $content->country = $request-> country;
            $content->costs = $request->costs;
            
            
            $filename=$request->file('picture')->store('public/picture');
            
            $content->picture = basename($filename);
            
            
            
            /*
            if(!isset($data['picture'])){
                array_set($data , 'picture' ,basename($filename) );
            }
            */
            
            
          $content->save();

        }
        return redirect('/');
    }

   
    public function destroy($id)
    {
        $content= Content::findOrFail($id);
        
        if(\Auth::id() === $content->user_id)
        {
            $content->delete();
        }
        return back();
    }
}
