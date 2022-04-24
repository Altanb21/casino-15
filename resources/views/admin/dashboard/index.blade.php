@extends('layouts/admin')

@section('title', 'Dashboard')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap.min.css')) }}">
@endsection
@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
@endsection

@section('content')
    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div class="row match-height">
            <!-- Greetings Card starts -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card card-congratulations">
                    <div class="card-body text-center">
                       
                        <div class="avatar avatar-xl bg-primary shadow">
                            <div class="avatar-content">
                                <i data-feather="award" class="font-large-1"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="mb-1 text-white">Congratulations!</h1>
                            <p class="card-text m-auto w-75">
                                 Now <strong>10</strong> bets 
                               
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Greetings Card ends -->

            <!-- Subscribers Chart Card starts -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header flex-column align-items-start pb-0">
                        <div class="card-header p-0 mb-2">
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="users" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h4 class="card-title ml-1">Peoples</h4>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text">Total Members: <strong>20</strong></p>
                           
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subscribers Chart Card ends -->

            <!-- Orders Chart Card starts -->
           
            <!-- Orders Chart Card ends -->
        </div>

       
    </section>
    <!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->

    <script>
        $(document).ready(function() {
            // On load Toast
            @if (Session::has('message'))
                setTimeout(function () {
                toastr['success'](
                '{{ Session::get('message') }}',
                '👋 {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!',
                {
                closeButton: true,
                tapToDismiss: false,
                }
                );
                }, 1000);
            @endif

            @if (Session::has('success'))
                setTimeout(function () {
                toastr['warning'](
                '{{ Session::get('success') }}',
                'Success!',
                {
                closeButton: true,
                tapToDismiss: false,
                }
                );
                }, 1000);
            @endif

            @if (Session::has('error'))
                setTimeout(function () {
                toastr['error'](
                '{{ Session::get('error') }}',
                'Declined!',
                {
                closeButton: true,
                tapToDismiss: false,
                }
                );
                }, 1000);
            @endif
        });
    </script>
@endsection
