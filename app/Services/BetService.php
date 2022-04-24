<?php
namespace App\Services;

use App\Models\Bet;
use App\Models\BetResponse;
use Auth;

class BetService{

   //get all bets
   public function getAll(){
       return Bet::all();
   }
   //find bet with position
   public function getBetWithPositions($id){
       return Bet::with('position')->findOrFail($id);
   }
   public function findById($id){
       return Bet::findOrFail($id);
   }


    //store new bet
    public function store($request){
        $bet = new Bet();
        $bet->name = $request->name;
      
        $bet->description = $request->description;
       

        if($bet->save()){
            //add positions
            $bet->position()->sync($request->positions);


            return $bet;
        }
        return false;
    }

    //delete bet

    public function delete($id){
        return Bet::find($id)->delete();
    }


    //get bet by id
    public function getById($id){
        return Bet::findOrFail($id);
    }

    //store bet response from user
    public function StoreBetResponse($request){
        $bet = new BetResponse();
        $bet->amount = $request->amount;
        $bet->user_id = Auth::user()->id;
        $bet->bet_id = $request->bet;
        $bet->position_id = $request->position;
        $bet->save();
        return $bet;
    }



    //total bet amount
    public function TotalAmount($id){
        return BetResponse::where('bet_id',$id)->sum('amount');
    }

    //get winner
    public function GetWinner($id){
        $bets =  BetResponse::where('bet_id',$id)->pluck('id')->toArray();
       
        $winner_id = $bets[array_rand($bets)];
      
        
        //find the user
        $bet = BetResponse::with('player')->find($winner_id);
        return $bet->player->name;

    }
}