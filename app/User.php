<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use App\Role;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    protected $fillable = [
        'username','name','lastname', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    //autorizacion de Roles
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
                abort(401, 'Usuario no autorizado');
        }
        return $this->hasRole($roles) ||
            abort(401, 'Usuario no autorizado');
    }
    //
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    //
    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }
}
