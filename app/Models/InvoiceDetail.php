<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    //
    protected $fillable = [
        'invoice_id',
        'ticket_id',
        'status',
        ];
    public function Invoice(){
        return $this->belongsTo(Invoice::class);
    }
    public function Ticket(){
        return $this->belongsTo(Ticket::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Screening(){
        return $this->belongsTo(Screening::class);
    }
    public function Movie(){
        return $this->belongsTo(Movie::class);
    }
    public function Seat(){
        return $this->belongsTo(Seat::class);
    }
}
