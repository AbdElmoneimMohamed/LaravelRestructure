<?php

namespace Modules\Backend\Users\Models;

use App\Entities\User as UserEntity;

class User extends UserEntity
{
    public function findUser($userId)
    {
        $user = $this->find($userId);
        return $user;
    }
}
