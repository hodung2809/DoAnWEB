<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = [
        'user_id',
        'date',
        'status',
        ];
    public function user_invoice(){
        return $this->belongsTo('Models\User','user_id');
    }
    public function invoicedetail_invoice(){
        return $this->hasMany('Models\InvoiceDetail','invoice_id','id');
    }
}
