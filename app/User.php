<?php

namespace p4;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function user() {
        return $this
            ->hasOne('\p4\Question', 'createdby')
            ->hasOne('\p4\Submission', 'user_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'last_login', 'profile_image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
