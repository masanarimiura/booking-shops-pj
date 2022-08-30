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
        'area' => 'required|max:100',
        'genre' => 'required|max:100',
        'comment' => 'required|max:256',
    );

    public function tweets() {
        return $this->hasMany('App\Models\Tweet');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
    
    public function likes() {
        return $this->hasMany('App\Models\Like');
    }
}
