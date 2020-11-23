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
    public function screening_ticket(){
        return $this->belongsTo('Models\Screening','screening_id');
    }
    public function seat_ticket(){
        return $this->belongsTo('Models\Seat','seat_id');
    }
}
