@extends('layouts.authentication.master')

@section('title', 'Login')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href=""><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ route('login.login') }}">
                                @csrf
                                <h4>Masuk ke akunmu</h4>
                                <p>Masukkan email dan password untuk login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email" required
                                        autocomplete="email" autofocus placeholder="test@gmail.com"
                                        value="{{ old('email') }}">
                                    @errorFeedback('email')
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="*********">
                                        <div class="show-hide"><span class="show"> </span></div>
                                        @errorFeedback('password')
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            value="1" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Ingat saya</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="link" href="{{ route('password.request') }}">Lupa password?</a>
                                    @endif
                                    <div class="text-end">
                                        <button class="btn btn-primary btn-block w-100 mt-3 spinner-btn"
                                            type="submit">Masuk</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.btn.spinner-btn').click(function(event) {
            event.preventDefault();

            var $btn = $(this);
            $btn.removeClass('btn-block');
            $btn.prop('disabled', true);
            $btn.append(
                '<span class="spinner-border spinner-border-sm spinner_loader" role="status" aria-hidden="true"></span>'
            );

            $(this).parents('form')[0].submit();
        });
    </script>
@endsection
