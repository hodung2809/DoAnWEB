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
    public function movie_actor(){
        return $this->belongsTo('Models\Movie','movie_id');
    }
}
