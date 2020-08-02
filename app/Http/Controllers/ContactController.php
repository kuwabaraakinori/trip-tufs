<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\Contactsendmail;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Content;

class ContactController extends Controller
{
    public function index(){
        
        return view('contact.index');
        
        
    }
    
    public function confirm(ContactRequest $request)
    {
        if($request->validated()){
            $data = $request->all();
          
             return view ('contact.confirm' , [
                 'data'=>$data
                 ] );
                
            }
    }
    
    public function send(ContactRequest $request)
    {
         if($request->validated())
         {
             $request->session()->regenerateToken();

             \Mail::send(new Contactsendmail());
            
         }
          return view('contact.send');
          
    }
    
   
}

