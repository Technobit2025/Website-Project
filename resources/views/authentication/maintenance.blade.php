@extends('layouts.authentication.master')

@section('title', 'Maintenance')

@section('css')
@endsection

@section('main_content')
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <!-- Maintenance start-->
        <div class="error-wrapper maintenance-bg">
            <div class="container">
                <ul class="maintenance-icons">
                    <li><i class="fa-solid fa-gear"></i></li>
                    <li><i class="fa-solid fa-gear"></i></li>
                    <li><i class="fa-solid fa-gear"></i></li>
                </ul>
                <div class="maintenance-heading">
                    <h2 class="headline">MAINTENANCE</h2>
                </div>
                <h4 class="sub-content">Our site is currently under maintenance we will be back shortly<br> thank you for
                    patience</h4>
                <div><a class="btn btn-primary-gradien btn-lg text-light" href="{{ route('admin.default_dashboard') }}">BACK TO HOME PAGE</a></div>
            </div>
        </div>
        <!-- Maintenance end-->
    </div>
@endsection

@section('scripts')
@endsection
