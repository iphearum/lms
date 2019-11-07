<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = [
        'id',
        'name'
    ];
    public function posts(){
        return $this->hasMany('App\Book');
    }
}
