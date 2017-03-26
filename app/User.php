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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function makeAdmin()
    {
        $this->isAdmin = true;
        $this->save();
    }

    public function removeAdmin()
    {
        $this->isAdmin = false;
        $this->save();
    }

    public function isAdmin()
    {
        return $this->isAdmin;
    }
}
