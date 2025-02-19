@extends('layouts.authentication.master')

@section('title', 'Login with Image Two')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 order-1"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/login/1.jpg') }}"
                    alt="looginpage"></div>
            <div class="col-xl-5 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo text-start" href="{{ route('admin.default_dashboard') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form">
                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="email" required="" placeholder="test@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">
                                        <label class="text-muted form-check-label" for="checkbox1">Remember password</label>
                                    </div><a class="link" href="{{ route('admin.forget_password') }}">Forgot password?</a>
                                    <div class="text-end mt-3">
                                        <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Sign in</button>
                                    </div>
                                </div>
                                <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                                <div class="social mt-4">
                                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login"
                                            target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><a
                                            class="btn btn-light" href="https://twitter.com/login?lang=en"
                                            target="_blank"><i class="fa-brands fa-x-twitter"></i></a><a
                                            class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a><a class="btn btn-light"
                                            href="https://www.google.com/" target="_blank"><i
                                                class="fa-brands fa-google"></i></a></div>
                                </div>
                                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                        href="{{ route('admin.sign_up') }}">Create Account</a></p>
                                <script>
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
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
