<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile() {
        return $this->hasOne(Profile::class);
    }

    public function role() {
        return $this->belongsTo(Role::class, 'id');
    }

    public function social() {
        return $this->hasOne(Social::class);
    }

    public function template() {
        return $this->hasOne(Social::class);
    }



    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role){
                if($this->hasRole($role)){
                    return true;
                }
            }
        }
        else{
            if($this->hasRole($role)){
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){
        if($this->role->name == $role){
            return true;
        }
        return false;
    }
}
