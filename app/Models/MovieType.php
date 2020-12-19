<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieType extends Model
{
    //
    protected $fillable = [
        'name',
        'status',
        ];
    public function Movie(){
        // return $this->hasMany('Models\Movie','movie_id','id');
        return $this->hasMany(Movie::class);
    }
}
