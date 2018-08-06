<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Models\LaratrustPermission;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Permission extends LaratrustPermission
{
    protected $guarded = [];

    use HasSlug;

    public function getSlugoptions() {
        return SlugOptions::create()->generateSlugsFrom('display_name')->saveSlugsTo('name');
    }
    
}
