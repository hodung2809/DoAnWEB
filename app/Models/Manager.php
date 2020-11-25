<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    protected $fillable = [
        'phone',
        'password',
        'first_name', 
        'last_name',
        'status',
        ];
    public function branch_manager(){
        return $this->hasOne('Models\Branch','manager_id','id');
}
