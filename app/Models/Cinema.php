<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    //
    protected $fillable = [
        'name',
        'seat_quantity',
        'branch_id',
        'status',
        ];
    public function branch_cinema(){
        return $this->belongsTo('Models\Branch','branch_id');
    }
    public function screening_cinema(){
        return $this->hasMany('Models\Screening','cinema_id','id');
    }
    public function seat_cinema(){
        return $this->hasMany('Models\Screening','cinema_id','id');
    }
}
