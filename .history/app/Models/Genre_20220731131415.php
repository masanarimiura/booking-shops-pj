<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|max:100',
    );

    public $timestamps = false;

    public function Shops() {
        return $this->hasMany(Shop::class);
    }
}
