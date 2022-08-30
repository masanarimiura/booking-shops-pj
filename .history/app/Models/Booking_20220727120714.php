<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|max:100',
        'area' => 'required|max:100',
        'genre' => 'required|max:100',
        'comment' => 'required|max:256',
    );

    public function user() {
        return $this->belongsTo(::classUser');
    }

    public function shop() {
        return $this->belongsTo('App\Models\Shop');
    }
}
