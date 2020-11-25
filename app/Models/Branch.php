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
    public function manager_branch(){
        return $this->belongsTo('Models\Manager','manager_id');
}
