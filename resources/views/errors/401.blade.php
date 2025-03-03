@extends('layouts.error_layouts.master')

@section('title', 'Error 401')

@section('main_content')
    <div class="container">
        <img src="{{ asset('assets/svg/error.svg') }}" alt="Error 401">
        <div class="col-md-8 offset-md-2">
            <h1>401</h1>
            <h3>Akses Ditolak</h3>
            <p class="sub-content">Maaf, Anda tidak memiliki akses ke halaman ini. Silakan login kembali.</p>
        </div>
        <div><a class="btn btn-primary btn-lg" href="{{ route('login') }}">KEMBALI KE HALAMAN UTAMA</a></div>
    </div>
@endsection
