<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class VideoGames extends Moloquent
{
    protected $fillable = ['nombre', 'genero', 'año', 'puntaje'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}