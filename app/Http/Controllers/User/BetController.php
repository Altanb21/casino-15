<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserBetRequest;
use App\Services\BetService;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BetController extends Controller
{
    public $bet;
    public function __construct(BetService $bet)
    {
        $this->bet = $bet;
    }
    public function create($id){
        $bet = $this->bet->getBetWithPositions($id);
        return view('create',['bet'=>$bet]);
    }

    //store bet response
    public function store(UserBetRequest $request){
        $bet = $this->bet->StoreBetResponse($request);
        if($bet){
            Session::flash('success','Bet Created Successfully');
            return redirect()->route('user.create-bet',$request->bet);
        }
        Session::flash('error','Something went wrong, Please try again!');
        return redirect()->back();

    }

    //bet result
    public function result($id){
     $total_bet_amount = $this->bet->TotalAmount($id);
     $commission =floor($total_bet_amount * Config::get('constants.commission') /100);
     $winning_amount =$total_bet_amount - $commission;
     $winner = $this->bet->GetWinner($id);
    
     return view('result',compact('total_bet_amount','commission','winning_amount','winner'));
    }




}
