<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function users() {
        return $this->hasMany('App\User');
    }

    public function teams() {
        return $this->hasMany('App\Team');
    }

    public function tournaments() {
        return $this->hasMany('App\Tournament');
    }
}
