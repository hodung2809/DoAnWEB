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
        public function Branch(){
            return $this->hasOne(Branch::class);
        }

}
