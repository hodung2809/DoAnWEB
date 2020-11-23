<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'status',
        ];
    public function cinema_branch()
    {
        return $this->hasOne('Models\Cinema','branch_id','id');
    }
        
}
