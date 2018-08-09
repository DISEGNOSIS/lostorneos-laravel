<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function roles() {
		return $this->belongsToMany('App\Role');
	}

	public function permissions() {
		return $this->belongsToMany('App\Permission');
	}

	public function getRoleListAttribute() {
		return $this->roles->pluck('id')->toArray();
    }
    
    public function teams() {
        return $this->belongsToMany('App\Team', 'role_user')
             ->withPivot('user_id');
    }

    public function tournaments() {
        return $this->hasMany('App\Tournament');
    }
}
