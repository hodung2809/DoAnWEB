<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //
    protected $fillable = [
        'cinema_id',
        'name',
        'status',
        ];
    public function ticket_seat(){
        return $this->hasOne('Models\Seat','seat_id','id');
    }
    public function cinema_seat(){
        return $this->belongsTo('Models\Cinema','cinema_id');
    }
}
