<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactsendmail extends Mailable
{
    use Queueable, SerializesModels;


     protected $data;
     protected $view;

     
     
    
    public function __construct($data , $view = 'mail.blade.php')
    {
        $this->data = $data;
        $this->view =$view;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data['from_email'], $this->data['name'])
        ->to($this->data['to'] , $this->data['to_name'])
        ->subject($this->data['subject'])
        ->view('contact.mail' . $this->view)
        ->with(['data'=> $this->data]);
    }
}
