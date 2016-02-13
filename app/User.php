<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'pub_username', 'user_role',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isContentCurator()
    {
        $response = false;

        if ($this->user_role == 'curator' || $this->user_role == 'admin')
            $response = true;

        return $response;
    }

    public function isAdministrator()
    {
        $response = false;

        if($this->user_role == 'admin')
            $response = true;

        return $response;
    }
}
