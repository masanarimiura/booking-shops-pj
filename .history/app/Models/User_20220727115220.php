<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|max:100',
        'email' => 'required|max:256|unique:users|email',
        'password' => 'required|min:6|max:256',
    );

    public function s() {
        return $this->hasMany('App\Models\Tweet');
    }

    public function likes() {
        return $this->hasMany('App\Models\Like');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
