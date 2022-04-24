<?php
namespace App\Services;

use App\Models\Position;

class PositionsService{
    public function getAll(){
        return Position::all();
    }
}