<?php

namespace App;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function add($fields)
    {
        $user= new static;
        $user->fill($fields);
        $user->password=bcrypt($fields['password']);
        $user->save();
        return $user;
    }

    public function edit($fields)
    {

        $this->fill($fields);
        $this->password=$fields['password'];
        $this->save();
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }
}
