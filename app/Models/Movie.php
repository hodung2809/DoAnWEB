<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'name',
        'movie_type_id',
        'country_id',
        'dicector', 
        'length',
        'opening_day',
        'status',
        ];
    public function movietype_movie(){
        return $this->belongsToMany('Models\MovieType','movie_type_id');
    }
    public function country_movie(){
        return $this->belongsTo('Models\Country','country_id');
    }
}
