<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    //
    protected $fillable = [
        'invoice_id',
        'ticket_id',
        'quantity',
        'status',
        ];
    public function invoice_invoicedetail(){
        return $this->belongsTo('Models\Invoice','invoice_id');
    }
    public function ticket_invoicedetail(){
        return $this->belongsTo('Models\Ticket','ticket_id');
    }
}
