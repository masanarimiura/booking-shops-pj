<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\User;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'date' => 'required',
        'time' => 'required',
        'number' => 'required|max:256',
    );

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function shop() {
        return $this->belongsTo(Shop::class);
    }
}
