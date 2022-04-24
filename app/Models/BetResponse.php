<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BetResponse extends Model
{
    use HasFactory;

    public function player(){
        return $this->belongsTo(User::class,'user_id');
    }
}
