<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|max:100',
        'comment' => 'required|max:256',
        'image_url' => 'required|max:3000',
    );

    public $timestamps = false;

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
    
    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,'users','user_id');
    }
}
