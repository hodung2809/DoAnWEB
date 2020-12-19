<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MovieType;
use App\Models\Country;

class Movie extends Model
{
    //
    protected $fillable = [
        'name',
        'movie_type_id',
        'country_id',
        'dicector', 
        'length',
        'trailer',
        'image',
        'price',
        'opening_day',
        'status',
        ];
    public function MovieType(){
        return $this->belongsTo(MovieType::class);
    }
    public function Country(){
        return $this->belongsTo(MovieType::class);
    }
    public function Comment(){
        return $this->hasMany(Comment::class);
    }
    public function Screening(){
        return $this->hasMany(Screening::class);
    }
}
