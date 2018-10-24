<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
            'authors',
             'image',
             'genre_id',
             'publisher_id'
    ];

    public function genre()
    {
        return $this->belongsTo('App\Genres');
    }

    public function bookshop()
    {
        return $this->hasMany('App\Bookshops');
    }

    public function publisher()
    {
        return $this->belongsTo('App\Publishers');
    }
}
