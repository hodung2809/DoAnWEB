<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = [
        'user_id',
        'date',
        'status',
        ];
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function invoicedetail_invoice(){
        return $this->hasMany('Models\InvoiceDetail','invoice_id','id');
    }
}
