@php
$configData = Helper::applClasses();
@endphp
@extends('layouts/auth')

@section('title', 'Admin Login')
@section('page-style')
{{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection
@section('content')

  <!-- Login-->
  <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
      <h2 class="card-title font-weight-bold mb-1">Welcome to {{ config('app.name', 'Laravel') }}! &#x1F44B;</h2>
      <p class="card-text mb-2">Please sign-in to your account </p>
      @if(Session::has('error'))
      <div class="alert alert-danger p-2" role="alert">
        {{Session::get('error')}}
      </div>
      @endif
      @if(Session::has('access_error'))
      <div class="alert alert-danger p-2" role="alert">
        {{Session::get('access_error')}}
      </div>
      @endif
      <form class="auth-login-form mt-2" action="{{route('do-login')}}" method="POST">
        @csrf
        <div class="form-group">
          <label class="form-label" for="login-email">Email</label>
          <input class="form-control" id="login-email" type="text" name="email" placeholder="Email or Username" aria-describedby="login-email" autofocus="" tabindex="1" />
        </div>
        <div class="form-group">
          
          <div class="input-group input-group-merge form-password-toggle">
            <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" />
            <div class="input-group-append">
              <span class="input-group-text cursor-pointer">
                <i data-feather="eye"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div div class="custom-control custom-checkbox">
            <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3" />
            <label class="custom-control-label" for="remember-me">Remember Me</label>
          </div>
        </div>
        <button class="btn btn-primary btn-block" tabindex="4">Sign in</button>
      </form>
      <p class="text-center mt-2">
        <span>New on our platform?</span>
        <a href="{{route('register')}}"><span>&nbsp;Create an account</span></a>
      </p>          
    </div>
  </div>
  <!-- /Login-->
  
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/forms/validation/jquery.validate.min.js'))}}"></script>
@endsection

@section('page-script')
<script src="{{asset(mix('js/scripts/pages/page-auth-login.js'))}}"></script>
@endsection