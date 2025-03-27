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
                            <div><a class="logo" href="{{ route('login') }}"><img class="img-fluid for-light"
                                        src="{{ asset('assets/images/logo/logo.png') }}" style="width: 176px;"
                                        alt="looginpage"><img class="img-fluid for-dark"
                                        src="{{ asset('assets/images/logo/logo_dark.png') }}" style="width: 176px;"
                                        alt="looginpage"></a>
                            </div>
                            <div class="login-main">
                                <form class="theme-form" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <h4>Reset Passwordmu</h4>
                                    <div class="form-group">
                                        <label class="col-form-label">Email</label>
                                        <input id="email" type="email" class="form-control " name="email"
                                            value="" required="" autocomplete="email" autofocus=""
                                            placeholder="test@gmail.com">
                                    </div>


                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>
                                            Kirim</button>
                                        Link Reset Password </button>
                                    </div>
                                </form>
                                <a href="{{ route('login') }}" class="text-center">
                                    <p><i class="fa fa-long-arrow-left"></i>
                                        Kembali ke halaman login</p>
                                </a>
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
