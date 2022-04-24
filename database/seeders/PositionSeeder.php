<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
    public function run()
    {
        $positions = [['position'=>'first'],['position'=>'second'],['position'=>'third'],['position'=>'fourth'],['position'=>'fifth'],['position'=>'six'],['position'=>'seven'],['position'=>'eight'],['position'=>'nine']];
   
        Position::insert($positions);
    }
}
