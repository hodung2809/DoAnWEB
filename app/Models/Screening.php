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
    public function ticket_screening(){
        return $this->hasMany('Models\Ticket','screening_id','id');
    }
    public function movie_screening(){
        return $this->belongsTo('Models\Movie','movie_id');
    }
    public function cinema_screening(){
        return $this->belongsTo('Models\Cinema','cinema_id');
    }
}
