<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'rating' => 'required|numeric|between:1,5',
        'date' => 'required',
        'time' => 'required',
        'number' => 'required|max:2',
        'name' => 'required|max:100',
        'comment' => 'required|max:256|unique:users|email',
    );

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function shop() {
        return $this->belongsTo(Shop::class);
    }
}
