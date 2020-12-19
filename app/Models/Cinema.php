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
    public function Branch(){
        return $this->belongsTo(Branch::class);
    }
    public function Screening(){
        return $this->hasMany(Screening::class);
    }
    public function Seat(){
        return $this->hasMany(Seat::class);
    }
}
