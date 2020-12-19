<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey="id";
    protected $table="countries";
    //  
    protected $fillable = [
        'name',
        'status',
        ];
    public function Movie()
    {
        // return $this->hasMany('Models\Movie','movie_id','id');
        return $this->hasMany(Movie::class);
    }
}
