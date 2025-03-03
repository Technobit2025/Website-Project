@extends('layouts.error_layouts.master')

@section('title', 'Error 403')

@section('main_content')
    <div class="container">
        <svg>
            <use href="{{ asset('assets/svg/icon-sprite.svg#error-403') }}"></use>
        </svg>
        <div class="col-md-8 offset-md-2">
            <h1>403</h1>
            <h3>Akses Ditolak</h3>
            <p class="sub-content">Jika Anda menerima kesalahan 403 Forbidden, periksa hak akses Anda atau hubungi
                administrator server untuk mendapatkan izin yang diperlukan.</p>
        </div>
        <div><a class="btn btn-primary btn-lg" href="{{ route('login') }}">KEMBALI KE HALAMAN UTAMA</a></div>
    </div>
@endsection
