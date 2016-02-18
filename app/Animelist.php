<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animelist extends Model
{
    protected $fillable =
        [
            'listname',
            'watched_anime',
            'planned_anime',
            'held_anime',
            'dropped_anime',
            'watching_anime',
        ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
