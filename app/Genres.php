<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    public function books()
    {
        return $this->hasMany('App\Books');
    }
}
