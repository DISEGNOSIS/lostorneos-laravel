<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tournament extends Model
{
    protected $guarded = [];

    use HasSlug;

    public function getSlugoptions() {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function game() {
        return $this->belongsTo('App\Game');
    }

    public function teams() {
        return $this->belongsToMany('App\Team')->withTimestamps();
    }

    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function country() {
        return $this->belongsTo('App\Country');
    }
}
