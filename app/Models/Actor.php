<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    protected $fillable = [
        'movie_id',
        'actor_name',
        'status',
        ];
    public function Movie(){
        return $this->belongsTo(Movie::class);
    }
}
