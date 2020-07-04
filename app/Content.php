<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['content' , 'title' ,  'picture' , 'span' , 'cost' , 'continent' , 'country'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
