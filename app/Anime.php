<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable =
        [
            'name',
            'description',
            'altname',
            'imageurl',
            'headerimg_url',
            'episodes',
            'episodes_duration',
            'categories',
            'tags',
            'studio',
            'mal_id',
            'op_yt_id',
            'released'
        ];

    public function setReleasedAttribute($date)
    {
        $this->attributes['released'] = Carbon::parse($date);
    }
}
