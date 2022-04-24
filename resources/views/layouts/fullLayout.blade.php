<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loaded">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>
  

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')
</head>



<body class="vertical-layout vertical-menu-modern light" }} data-menu="
    vertical-menu-modern" data-layout="light" data-framework="laravel" data-asset-path="{{ asset('/') }}">

    <!-- BEGIN: Content-->
    <div class="app-content">
        <div class="content-wrapper">
            <div class="content-body">

                {{-- Include Startkit Content --}}
                @yield('content')

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
                    width: 14,
                    height: 14
                });
            }
        })



        $(document).ready(function(){
      // On load Toast
      @if(Session::has('success'))
        toastr['success'](
          '{{Session::get('success')}}',
          'Success!',
          {
            closeButton: true,
            tapToDismiss: false,
          }
        );
      @endif

      @if(Session::has('error'))
        toastr['error'](
          '{{Session::get('error')}}',
          'Error!',
          {
            closeButton: true,
            tapToDismiss: false,
          }
        );
      @endif
    });
    </script>
</body>

</html>
