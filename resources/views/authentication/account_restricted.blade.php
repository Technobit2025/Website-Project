@extends('layouts.authentication.master')

@section('title', 'Account Restricted')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div class="restricted-account">
                        <div><a class="logo" href="{{ route('admin.default_dashboard') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img class="img-fluid for-dark"
                                    src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form">
                                <h2>Your account login is restricted </h2>
                                <p>Access to your account may be restricted you may have violated our professional community
                                    policies.</p><a class="btn btn-primary" href="{{ route('admin.default_dashboard') }}" target="_blank">Home
                                    Page</a><img class="img-fluid" src="{{ asset('assets/images/login/4.png') }}"
                                    alt="restricted account">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
