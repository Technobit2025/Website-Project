@extends('layouts.authentication.master')

@section('main_content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href="{{ route('login') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input class="form-control" type="email" name="email" required=""
                                        placeholder="test@gmail.com" value="{{ old('email', request()->email) }}">
                                </div>
                                {{-- <h4>Buat Passwordmu</h4> --}}
                                <div class="form-group">
                                    <label class="col-form-label">Password Baru</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Ulangi Password</label>
                                    <input class="form-control" type="password" name="password_confirmation" required=""
                                        placeholder="*********">
                                </div>
                                <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">
                                        <label class="text-muted form-check-label" for="checkbox1">Ingat password</label>
                                    </div>
                                    <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Selesai </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
