<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Movie;

class Comment extends Model
{
    //
    protected $fillable = [
        'user_id',
        'movie_id',
        'rate',
        'content',
        'status',
        ];
        public function Movie(){
            return $this->belongsTo(Movie::class);
        }
        public function User(){
            return $this->belongsTo(User::class);
        }
}
