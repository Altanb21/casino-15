<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\BetService;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $bet;
    public function __construct(BetService $bet)
    {
        $this->bet = $bet;
    }
    public function index(){
        $bets = $this->bet->getAll();
        
        return view('bets',['bets'=>$bets]);
    }
}
