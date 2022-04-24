@extends('layouts.fullLayout')
@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/card.css')) }}">
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center">{{$bet->name}}</h2>
            </div>

        </div>
        <form action="{{route('user.bet.store')}}" id="create" method="POST">
            @csrf
            <div class="row mt-5">

                <div class="col-md-8">
                    <div class="grid">

                        @forelse($bet->position as $position)
                            <label class="card">
                                <input name="position" class="radio" type="radio" value="{{ $position->id }}">

                                <span class="plan-details">
                                    <span class="plan-type">{{ $position->position }}</span>
                                    <br>
                                    <span>{{ $bet->name }}</span>
                                    <span>{{ $bet->description }}</span>

                                </span>
                            </label>

                        @empty
                        @endforelse






                    </div>



                </div>
                <div class="col-md-4">
                    <div class="card p-3" style="min-height: 150px">
                        <input type="hidden" name="bet" value="{{$bet->id}}">
                        <input type="text" name="amount" class="form-control amount" placeholder="Enter Amount">
                        <button type="submit" class="btn btn-primary btn-block mt-1" id="bidButton" disabled>Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('page-script')

    <script src="{{ asset(mix('js/scripts/app/bets/user-bet-create.js')) }}"></script>
@endsection
