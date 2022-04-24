<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BetRequest;
use Illuminate\Http\Request;
use Session;
use App\Services\BetService;
use App\Services\PositionsService;
use DataTables;

use function PHPUnit\Framework\returnSelf;

class BetsController extends Controller
{
    public $bet,$position;
    public function __construct(BetService $bet,PositionsService $position)
    {
        $this->bet = $bet;
        $this->position = $position;
    }

    public function index(Request $request){
        if($request->ajax()){
            $bets = $this->bet->getAll();
            return DataTables::of($bets)->addColumn('actions',function($bet){
                return '<a href="/admin/bets/'. $bet->id.'"     title="View Bet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-medium-3 text-primary mr-50"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                 <a     title="Delete Bet" id="'.$bet->id.'" class="delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-medium-3 text-primary mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>';
                
            })->RawColumns(['actions'])->make(true);
        }
        return view('admin.bets.index');
    }

    //create a new bet
    public function create(){
        $positions = $this->position->getAll();
       
        return view('admin.bets.create',['positions'=>$positions]);
    }
    //store a new bet
    public function store(BetRequest $request){
    
      $bet = $this->bet->store($request);
      if($bet){
          Session::flash('success','New Bet created successfully');
          return redirect()->route('bets.index');
      }
      Session::flash('error','Something went wrong, Please try again');
      return redirect()->back();

    }

    //destroy bet
    public function destroy(Request $request){
        $delete = $this->bet->delete($request->id);
        if($delete){
            return response()->json([
                'success'=>true,
                'message'=>'Bet deleted successfully'
            ]);
        }
    }

    //show bet
    public function show($id){
        $bet = $this->bet->getById($id);
        return view('admin.bets.show',['bet'=>$bet]);
    }

    //change status
    public function changeStatus(Request $request){
        $bet = $this->bet->findById($request->id);
        $bet->status = $request->status;
        if($bet->save()){
            return response()->json([
                'success'=>true,
                'message'=>'Bet Status Changed Successfully'
            ]);
        }

        return response()->json([
            'success'=>false,
            'message'=>'Something went wrong, Please try again !
            '
        ]);
    }
}
