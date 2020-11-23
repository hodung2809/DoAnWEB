<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //  
    protected $fillable = [
        'name',
        'status',
        ];
    public function movie_country()
    {
        return $this->belongsTo('Models\Movie','movie_id');
    }
}
