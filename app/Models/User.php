<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use App\Permissions\HasPermissionsTrait;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
//    use HasPermissionsTrait;


    public function authorizeRoles($roles) {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
                abort(401, 'This action is not authorized.');
        }
        return $this->hasRole($roles) ||
            abort(401, 'This action is not authorized');
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

//    public function hasAnyRole($roles)
//    {
//        return null !== $this->roles()->whereIn('name', $roles)->first();
//    }
//
//    public function hasRole($role)
//    {
//        dd($this->roles()->where('slug', $role)->first());
//        return null !== $this->roles()->where('slug', $role)->first();
//    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
