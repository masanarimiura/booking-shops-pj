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

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public static $rules = array(
        'name' => 'required|max:100',
        'email' => 'required|max:256|unique:users|email',
        'password' => 'required|min:6|max:256',
    );

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function s(){
        return $this->belongsToMany(Shop::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
