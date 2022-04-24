@extends('layouts.fullLayout')

@section('content')
<div class="container">
   <div class="row mt-5">
       <div class="col-md-12">
            <h4 class="text-center">Available Bets</h4>
       </div>
      
   </div>
   <div class="row mt-5">
       @forelse ($bets as $bet)
       <div class="col-md-3">
        <div class="card text-center">
            
            <div class="card-body">
              <h5 class="card-title">{{$bet->name}}</h5>
              <p class="card-text">{{$bet->description}}</p>
              @if($bet->status == 1)
              <a href="{{route('user.create-bet',$bet->id)}}" class="btn btn-primary">Add Money</a>
              @else
              <a href="{{route('user.bet.result',$bet->id)}}" class="btn btn-secondary">Result</a>
              @endif
            </div>
           
          </div>
       </div>
       @empty
           
       @endforelse
       
   </div>
</div>
@endsection