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
        '' => 'required|max:120',
        'content' => 'required|max:120',
        'content' => 'required|max:120',
        'content' => 'required|max:120',
        'name' => 'required|max:20',
        'email' => 'required|unique:posts|email',
        'password' => 'required|min:6',
        'uid' => 'required',
    );

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function tweet() {
        return $this->belongsTo('App\Models\Tweet');
    }
}
