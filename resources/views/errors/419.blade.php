@extends('layouts.error_layouts.master')

@section('title', 'Error 419')

@section('main_content')
    <div class="container">
        <img src="{{ asset('assets/svg/error.svg') }}" alt="Error 419">
        <div class="col-md-8 offset-md-2">
            <h1>419</h1>
            <h3>Sesi Habis</h3>
            <p class="sub-content">Sesi Anda telah berakhir. Silakan login kembali.</p>
        </div>
        <div><a class="btn btn-primary btn-lg" href="{{ route('login') }}">KEMBALI KE HALAMAN UTAMA</a></div>
    </div>
@endsection
