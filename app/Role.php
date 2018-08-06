<?php

namespace App;

use Laratrust\Models\LaratrustRole;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Role extends LaratrustRole
{
    protected $guarded = [];

    use HasSlug;


    public function getSlugoptions() {
        return SlugOptions::create()->generateSlugsFrom('display_name')->saveSlugsTo('name');
    }


}
