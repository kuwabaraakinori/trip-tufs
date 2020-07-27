<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;

class ContactController extends Controller
{
    public function index(){
        
        return view('contact.contact');
        
        
    }
    
    public function confirm(Request $request)
    {
        $request->validate([
            'continent' => 'required|string',
            ]);
        
        $content = new Content;
        
        $content->content = $request->content;
        
        $contet->save();
            
        
        return view ('contact.confirm' , [
            'content' => $content
            ]);
            
    }
    
    public function send(Request $request)
    {
        
    }
}
