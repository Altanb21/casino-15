@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
{{-- {!! Helper::applClasses() !!} --}}
@php
$configData = Helper::applClasses();
@endphp

<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}" class="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') | {{ config('app.name') }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">

  {{-- Include core + vendor Styles --}}
  @include('panels/styles')
 
</head>



<body class="vertical-layout vertical-menu-modern {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }} {{($configData['theme'] === 'dark') ? 'dark-layout' : 'light' }}
    data-menu=" vertical-menu-modern" data-layout="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}" style="{{ $configData['bodyStyle'] }}" data-framework="laravel" data-asset-path="{{ asset('/')}}">

  <!-- BEGIN: Content-->
  <div class="">
    <div class="content-wrapper {{ $configData['layoutWidth'] === 'boxed' ? 'container p-0' : '' }}">
      <div class="content-body">
      <div class="auth-wrapper auth-v2">
        <div class="auth-inner row m-0">
            <!-- Brand logo-->
            <a class="brand-logo" href="{{url('/')}}">
              
              <!-- <h2 class="brand-text text-primary ml-1">{{ config('app.name', 'Laravel') }}</h2> -->
            </a>
            <!-- /Brand logo-->
            <!-- Left Text-->
            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
              <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                @if($configData['theme'] === 'dark')
                <img class="img-fluid" src="{{asset('images/pages/login-v2-dark.svg')}}" alt="Login V2" />
                @else
                <img class="img-fluid" src="{{asset('images/pages/login-v2.svg')}}" alt="Login V2" />
                @endif
              </div>
            </div>
            <!-- /Left Text-->
            {{-- Include Startkit Content --}}
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End: Content-->

  {{-- include default scripts --}}
  @include('panels/scripts')
  
  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14
          , height: 14
        });
      }
    })

  </script>
</body>

</html>
