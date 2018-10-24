<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookshops extends Model
{
    public function book()
    {
        return $this->hasMany('App\Books');
    }
}
