<?php

namespace App;

use Laratrust\Models\LaratrustTeam;

class Team extends LaratrustTeam
{
    protected $guarded = [];

    public function country() {
        return $this->belongsTo('App\Country');
    }

}
