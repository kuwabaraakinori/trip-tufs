<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
     protected $fillable = ['user_id' ,'content' , 'title' , 'picture' , 'span' , 'costs' , 'continent' , 'country'];
    
     protected $table = 'contents';
     
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function content()
    {
        
    }
}
