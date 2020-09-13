<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','major','university'
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


    public function setPasswordAttribute($password)
   {
       $this->attributes['password'] = bcrypt($password);
   }



   // has many relationship (always with s)
   public function memberships()
   {
       // you always have to return the relationship as instance
        return $this->hasMany(Membership::class);
   }

    public function notes()
    {
        // you always have to return the relationship as instance
        return $this->hasMany(Membership::class);
    }

    public function cart()
    {
        // you always have to return the relationship as instance
        return $this->hasMany(Cart::class);
    }

    public function transaction()
    {
        // you always have to return the relationship as instance
        return $this->hasMany(TransactionHistory::class);
    }
}
