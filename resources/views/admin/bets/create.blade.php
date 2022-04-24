@extends('layouts/admin')

@section('title', 'Create new Bet')
@section('vendor-style')
 <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
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
                <h4 class="card-title">Create New Bet</strong> </h4>
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
                                value="{{old('name')}}" />
                        </div>
                       
                        <div class="form-group col-md-6">
                            <label class="form-label " for="email">Positions</label>
                           <select name="positions[]" id="" class="form-control select2" multiple="multiple">
                               @forelse ($positions as $position)
                                   <option value="{{$position->id}}">{{$position->position}}</option>
                               @empty
                                   
                               @endforelse
                           </select>
                        </div> 

                       
                                               
                    </div>
                    <div class="row">
                        
                        <div class="form-group col-md-12">
                            <label class="form-label" for="description">Description</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Description">{{old('description')}}</textarea>
                        </div> 
                       
                                           
                    </div>
                    
                    
                   
               
                    
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
@endsection

@section('vendor-script')
{{-- Vendor js files --}}
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection

@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/app/bets/bet-create.js')) }}"></script>
@endsection
