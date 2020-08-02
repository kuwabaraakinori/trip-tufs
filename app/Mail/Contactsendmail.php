<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Http\Request;
use App\Contet;
use App\User;


class Contactsendmail extends Mailable
{
    use Queueable, SerializesModels;
    
   
    public function __construct()
    {
        
    }

  
    public function build(Request $request)
    {
        return $this
        ->from($request->email)
        ->subject('Tufs-Tours')
        ->to('kaai06221733@gmail.com')
        ->view("mail")
        ->with([
            'from_email'=>$request->email,
            'content' => $request->content,
            'name' => $request->name
            ]);
    }
}
    