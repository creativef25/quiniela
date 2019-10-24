<?php

namespace App;
use App\Role;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'id','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
   {
       return $this->belongsToMany(Role::class)->withTimestamps();
   }

   public function authorizeRoles($roles)
{
    abort_unless($hola2 = $this->hasAnyRole($roles), 401);
    return $hola2;
}
public function hasAnyRole($roles)
{
    if (is_array($roles)) {
        foreach ($roles as $role) {
            if ($hola1 =$this->hasRole($role)) {
                return $hola1;
            }
        }
    } else {
        if ($this->hasRole($roles)) {
             return true;
        }
    }
    return false;
}
public function hasRole($role)
{
    if ($hola = $this->roles()->where('name', $role)->first()) {
        return $hola;
    }
    return false;
}


}
