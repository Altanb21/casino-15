<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bet extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable =['name','description','status'];

    //positions
    public function position(){
        return $this->belongsToMany(Position::class);
    }
}
