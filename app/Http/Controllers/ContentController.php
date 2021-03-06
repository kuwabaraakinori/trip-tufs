<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Content;
use Storage;
class ContentController extends Controller
{
   
    public function index()
    {
       
       $contents = Content::orderby('created_at' , 'desc')->paginate(6);
       
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
        /*
        if($request->validated()){
            $content =new Content;
            
            $image = $request->file('picture');
            $path = Storage::disk('s3')->putFile('tufstravel', $image, 'public');
            $content->picture = Storage::disk('s3')->url($path);

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
        */
        
        
        if($request->validated()){
            $content =new Content;
            
            $filename = $request->file('picture')->store('public/picture');
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

    
    public function edit($id)
    {
        $content = Content::findOrFail($id);

        return view('content.edit',[
          'message' => '編集フォーム',
          'content' => $content
          ]);
    }

   
    public function update(ContentRequest $request , $id)
    {
        /*
        if($request->validated()){
            $content = Content::find($id);

            $image = $request->file('picture');
            $path = Storage::disk('s3')->putFile('tufstravel', $image, 'public');
            $content->picture = Storage::disk('s3')->url($path);

            $content->user_id = $request->user_id;
            $content->content = $request->content;
            $content->title = $request->title;
            $content->span = $request->span;
            $content->continent = $request->continent;
            $content->country = $request-> country;
            $content->costs = $request->costs;
            
            $content->save();
        }

        return view('content.editconfirm' , [
            'content'=>$content,
            'message'=>'確認画面'
            ]);
        */
        
        if($request->validated()){
            $content = Content::find($id);

            $filename = $request->file('picture')->store('public/picture');
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

        return view('content.editconfirm' , [
            'content'=>$content,
            'message'=>'確認画面'
            ]);

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
