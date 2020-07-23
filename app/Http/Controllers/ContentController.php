<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Content;

class ContentController extends Controller
{
   
    public function index()
    {
       
       $contents = Content::orderby('created_at' , 'desc')->paginate(4);
       
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
        if($request->validated()){
            $content =new Content;
            
            $filename = $request->file('image')->store('public/image');
            $content->picture = basename($filename);

            $content->user_id = $request->user_id;
            $content->content = $request->content;
            $content->title = $request->title;
            $content->span = $request->span;
            $content->continent = $request->continent;
            $content->country = $request-> country;
            $content->costs = $request->costs;
            
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

    
    public function edit(Content $content)
    {
      return view('content.edit', [
         'content'=>$content
         ]);
    }

   
    public function update(ContentRequest $request, $id)
    {
        if($request->validated())
        {
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
