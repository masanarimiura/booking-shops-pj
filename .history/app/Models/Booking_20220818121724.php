<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'date' => 'required',
        'time' => 'required',
        'number' => 'required|max:',
    );

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function shop() {
        return $this->belongsTo(Shop::class);
    }

    protected 
    $dates = ['datetime'];
}
