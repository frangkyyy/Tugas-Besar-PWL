<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public function hasRole($role)
    {
        return $this->role === $role;
    }
}
