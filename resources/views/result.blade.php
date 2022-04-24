@extends('layouts.fullLayout')

@section('content')
<div class="container">
   
   <div class="row mt-2">
     
       <div class="col-md-4 mx-auto">
        <div class="card  p-3">
            <p>Total Bet Amount : <b>{{$total_bet_amount}}</b></p>
            <p>Casino Cammision : <b>{{$commission}}</b></p>
            <p>Winning price : <b>{{$winning_amount}}</b></p>
            <p>Winner name : <b>{{$winner}}</b></p>
            
            
           
          </div>
       </div>
    
           

       
   </div>
</div>
@endsection