<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function continents()
    {
        return $this->belongsTo(Continent::class);
    }
}
