<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Mail\ContactSendmail;

use App\User;
use App\Content;

class ContactController extends Controller
{
    public function index(){
        
        return view('contact.index');
        
        
    }
    
    public function confirm(Request $request)
    {
        $data = [];
        $request->validate([
            'content' => 'required|string',
            'email' => 'required|string',
            'name' => 'required|string'
            ]);
            
        $content  = $request->get('content');
        
        $email = $request->get('email');
        
        $name= $request->get('name');
        
        $data = [
            'content' => $content,
            'message' => '確認画面',
            'email' => $email,
            'name'=>$name
            ];
        
        return view ('contact.confirm' , $data);
            
    }
    
    public function send(Request $request)
    {
       
        $request->validate([
            'content' => 'required|string',
            'email' => 'required|string',
            'name'=> 'required|string'
            ]);
       
       
            
             \Mail::send(new ContactSendmail([
             'to_name' => $request->name,
             'name'=> 'Tufs-Tours',
             'from_email' => 'kaai06221733@gmail.com',
             'to' => $request->email,
             'data' => $request->content,
             'subject' => '自動送信メール'
             ], 'mail.blade.php'));
         
        
         $request->session()->regenerateToken();
         
         return view('contact.send');
            
        
        
    }
}

 