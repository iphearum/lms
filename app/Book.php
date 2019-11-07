<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Book extends Model
{
    public $fillable = [
        'name',
        'auth',
        'identifier',
        'sex',
        'stocks',
        'category_id',
        'status',
        'date',
        'description',
        'image',
    ];
    public function categery(){
        return $this->belongsTo('App\Category');
    }
}
