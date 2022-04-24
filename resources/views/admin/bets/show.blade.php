@extends('layouts/admin')

@section('title', 'View Bet')
@section('vendor-style')
 <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">View Bet</strong> </h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form id="bet-add-form" method="POST" action="{{route('bets.store')}}"
                   >
                    @csrf                    
                    <div class="row col-12">
                        <h5 class="mb-1">
                            <i data-feather="user" class="font-medium-4 mr-25"></i>
                            <span class="align-middle">Bet Info</span>
                        </h5>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="name">Bet Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Bet Name"
                                value="{{$bet->name}}" disabled/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="name">Status</label>
                            <input type="text" name="name" class="form-control" placeholder="Bet Name"
                                value="@if($bet->status == 1)Active @else Ended @endif" disabled/>
                        </div>
                        
                                               
                    </div>
                    <div class="row">
                        
                        <div class="form-group col-md-12">
                            <label class="form-label" for="description">Description</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Description" disabled>{{$bet->name}}</textarea>
                        </div> 
                                  
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Change Game Status
                      </button>
                    
                    
                   
               
                    
                    <div class="row col-12 flex-row-reverse mt-2 p-0">
                        <button type="submit"
                            class="btn btn-primary waves-effect waves-float waves-light">Submit</button>
                        <a class="btn btn-outline-secondary mr-1 waves-effect" href="{{route('bets.index')}}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Game Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="hidden" value="{{$bet->id}}" id="betId">
        <select name="status" id="status" class="form-control">
            @foreach(Config::get('constants.status') as $key => $value)
            <option value="{{$key}}">{{$value}}</option>
@endforeach
        </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="updateStatus">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('vendor-script')
{{-- Vendor js files --}}
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection

@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/app/bets/bet-create.js')) }}"></script>
@endsection
