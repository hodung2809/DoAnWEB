<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $fillable = [
        'name', 
        'address',
        'manager_id', 
        'status',
        ];
        public function Manager(){
            return $this->belongsTo(Manager::class);
        }
        public function Cinema(){
            return $this->hasMany(Cinema::class);
        }
}
