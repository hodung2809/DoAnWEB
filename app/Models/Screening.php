<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    //
    protected $fillable = [
        'movie_id',
        'cinema_id',
        'time',
        'status',
        ];
    public function Ticket(){
        return $this->hasMany(Ticket::class);
    }
    public function Movie(){
        return $this->belongsTo(Movie::class);
    }
    public function Cinema(){
        return $this->belongsTo(Cinema::class);
    }
}
