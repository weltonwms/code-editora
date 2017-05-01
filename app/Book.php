<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['title','subtitle','price','author'];
    
    public static function create(array $attributes = array())
    {
        $attributes['author']=  \Auth::user()->id;
        return parent::create($attributes);
    }
    
    
    
}
