<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
     protected $fillable = ['user_id' ,'content' , 'title' , 'picture' , 'span' , 'costs' , 'continent' , 'country'];
    
     protected $table = 'contents';
    
    /*
    public static $rules = array(
        "title" => "required|max:50",
        "picture"=>"required",
        "span" =>"required",
        "costs"=>"required",
        "continent"=>"required",
        "country"=>"required",
        "content"=>'required|max:500'
        );
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
