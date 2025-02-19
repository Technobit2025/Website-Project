@extends('layouts.authentication.master')

@section('title', 'Forgot Password')

@section('css')
@endsection

@section('main_content')
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card login-dark">
                        <div>
                            <div><a class="logo" href="{{ route('admin.default_dashboard') }}"><img class="img-fluid for-light"
                                        src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                        class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                        alt="looginpage"></a></div>
                            <div class="login-main">
                                <form class="theme-form">
                                    <h4>Reset Your Password</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Enter Your Mobile Number</label>
                                        <div class="row">
                                            <div class="col-4 col-sm-3">
                                                <input class="form-control mb-1" type="number" placeholder="+ 91">
                                            </div>
                                            <div class="col-8 col-sm-9">
                                                <input class="form-control mb-1" type="tel" placeholder="000-000-0000">
                                            </div>
                                            <div class="col-12">
                                                <div class="text-end">
                                                    <button class="btn btn-primary btn-block m-t-10"
                                                        type="submit">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4"><span class="reset-password-link">If don't receive OTP?  <a
                                                class="btn-link text-danger" href="#">Resend</a></span></div>
                                    <div class="form-group">
                                        <label class="col-form-label pt-0">Enter OTP</label>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-control text-center opt-text" type="text"
                                                    value="00" maxlength="2">
                                            </div>
                                            <div class="col">
                                                <input class="form-control text-center opt-text" type="text"
                                                    value="00" maxlength="2">
                                            </div>
                                            <div class="col">
                                                <input class="form-control text-center opt-text" type="text"
                                                    value="00" maxlength="2">
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mt-4">Create Your Password</h6>
                                    <div class="form-group">
                                        <label class="col-form-label">New Password</label>
                                        <div class="form-input position-relative">
                                            <input class="form-control" type="password" name="password"
                                                required="" placeholder="*********">
                                            <div class="show-hide"><span class="show"></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Retype Password</label>
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="form-check">
                                            <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">
                                            <label class="text-muted form-check-label" for="checkbox1">Remember
                                                password</label>
                                        </div>
                                        <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Done </button>
                                    </div>
                                    <p class="mt-4 mb-0 text-center">Already have an password?<a class="ms-2"
                                            href="{{ route('login') }}">Sign in</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
