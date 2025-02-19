@extends('layouts.authentication.master')

@section('title', 'Unlock User')

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
            <!-- Unlock page start-->
            <div class="authentication-main mt-0">
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
                                        <h4>Unlock </h4>
                                        <div class="form-group">
                                            <label class="col-form-label">Enter your Password</label>
                                            <div class="form-input position-relative">
                                                <input class="form-control" type="password" name="password"
                                                    required="" placeholder="*********">
                                                <div class="show-hide"><span class="show"> </span></div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="checkbox1"
                                                    type="checkbox">
                                                <label class="text-muted form-check-label" for="checkbox1">Remember
                                                    password</label>
                                            </div>
                                            <button class="btn btn-primary btn-block w-100 mt-3"
                                                type="submit">Unlock</button>
                                        </div>
                                        <p class="mt-4 mb-0">Already Have an account?<a class="ms-2"
                                                href="{{ route('login') }}">Sign in</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Unlock page end-->
            <!-- page-wrapper Ends-->
        </div>
    </div>
@endsection

@section('scripts')
@endsection
