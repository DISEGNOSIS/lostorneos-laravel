<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tag extends Model
{
    protected $guarded = [];

    use HasSlug;

    public function getSlugoptions() {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function posts() {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }

    public function tournaments() {
        return $this->belongsToMany('App\Tournament')->withTimestamps();
    }
}
