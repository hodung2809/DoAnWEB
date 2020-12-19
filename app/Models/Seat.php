<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //
    protected $fillable = [
        'name',
        'cinema_id',
        'status',
        ];
    public function Ticket(){
        return $this->hasOne(Ticket::class);
    }
    public function Cinema(){
        return $this->belongsTo(Cinema::class);
    }
}
