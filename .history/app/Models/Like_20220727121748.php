<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public function user() {
        return $this->belongsTo('App\Models\U');
    }

    public function () {
        return $this->belongsTo('App\Models\User');
    }
}
