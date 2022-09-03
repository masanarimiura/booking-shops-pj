<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

-class User extends Authenticatable
class User extends Authenticatable implements MustVerifyEmail
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
        return $this->belongsToMany(Shop::class,'likes','user_id','shop_id');
    }

    public function ratings() {
        return $this->belongs(Rating::class);
    }

    public function shops(){
        return $this->belongsToMany(Shop::class,'bookings','user_id','shop_id')->withPivot(['datetime','number']);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}