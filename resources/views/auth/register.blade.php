@extends('layouts/auth')

@section('title', 'Admin Registeration')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<!-- Register-->
<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
      <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title font-weight-bold mb-1">Adventure starts here 🚀</h2>
        <p class="card-text mb-2">Make your app management easy and fun!</p>
        <form class="auth-register-form mt-2" action="{{route('do-register')}}" method="POST">
          @csrf
          <div class="form-group">
            <label class="form-label" for="register-username">Name</label>
            <input class="form-control" id="register-username" type="text" name="name" placeholder="Name" aria-describedby="register-username" autofocus="" tabindex="1"/>
          </div>
          <div class="form-group">
            <label class="form-label" for="register-email">Email</label>
            <input class="form-control" id="register-email" type="text" name="email" placeholder="Email" aria-describedby="register-email" tabindex="2" />
          </div>
          <div class="form-group">
            <label class="sr-only" for="mobile">Mobile</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">+91</div>
              </div>
              <input type="number" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="register-password">Password</label>
           
            <div class="input-group input-group-merge form-password-toggle">
              <input class="form-control form-control-merge" id="register-password" type="password" name="password" placeholder="············" aria-describedby="register-password" tabindex="3" />
              <div class="input-group-append">
                <span class="input-group-text cursor-pointer">
                  <i data-feather="eye"></i>
                </span>
              </div>
            </div>
          </div>
          
          <button class="btn btn-primary btn-block" tabindex="5">Sign up</button>
        </form>
        <p class="text-center mt-2">
          <span>Already have an account?</span>
          <a href="{{route('login')}}"><span>&nbsp;Sign in instead</span></a>
        </p>
        <div class="divider my-2">
          <div class="divider-text">or</div>
        </div>
        <div class="auth-footer-btn d-flex justify-content-center">
          <a class="btn btn-facebook" href="javascript:void(0)">
            <i data-feather="facebook"></i>
          </a>
          <a class="btn btn-twitter white" href="javascript:void(0)">
            <i data-feather="twitter"></i>
          </a>
          <a class="btn btn-google" href="javascript:void(0)">
            <i data-feather="mail"></i>
          </a>
          <a class="btn btn-github" href="javascript:void(0)"><i data-feather="github"></i></a>
        </div>
      </div>
    </div>
  <!-- /Register-->
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/forms/validation/jquery.validate.min.js'))}}"></script>
@endsection

@section('page-script')
<script src="{{asset(mix('js/scripts/pages/page-auth-register.js'))}}"></script>
@endsection