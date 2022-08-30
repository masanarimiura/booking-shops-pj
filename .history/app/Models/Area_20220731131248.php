<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|max:100',
    );

    public $timestamps = false;

    public function Shops() {
        return $this->hasMany(Booking::class);
    }
    
    public function likes() {
        return $this->hasMany(Like::class);
    }
}
