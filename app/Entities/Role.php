<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities\User as UserEntity;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const ADMIN_ROLE = "admin";
    const USER_ROLE  = "user";

    protected $fillable = [
        'name',
    ];

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(UserEntity::class);
    }
}
