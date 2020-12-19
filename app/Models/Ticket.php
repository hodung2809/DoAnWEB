<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = [
        'screening_id',
        'seat_id',
        'status',
        ];
    public function invoicedetail_ticket(){
        return $this->hasOne('Models\InvoiceDetail','ticket_id','id');
    }
    public function Screening(){
        return $this->belongsTo(Screening::class);
    }
    public function Seat(){
        return $this->belongsTo(Seat::class);
    }
    public function Movie(){
        return $this->belongsTo(Movie::class);
    }
}
