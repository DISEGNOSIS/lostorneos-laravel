<?php

namespace App;

use Laratrust\Models\LaratrustTeam;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Team extends LaratrustTeam
{
    protected $guarded = [];

    use HasSlug;

    public function getSlugoptions() {
        return SlugOptions::create()->generateSlugsFrom('display_name')->saveSlugsTo('name');
    }

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function tournaments() {
        return $this->belongsToMany('App\Tournament')->withTimestamps();
    }

    public function users() {
        return $this->belongsToMany('App\User', 'role_user')
             ->withPivot('team_id');
    }

}
