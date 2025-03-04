@extends('layouts.error_layouts.master')

@section('title', 'Error 404')

@section('main_content')
    <div class="container">
        <svg>
            <use href="{{ asset('assets/svg/icon-sprite.svg#error-404') }}"></use>
        </svg>
        <div class="col-md-8 offset-md-2">
            <h1>404</h1>
            <h3>Halaman Tidak Ditemukan</h3>
            <p class="sub-content">Anda mungkin tidak dapat menemukan halaman yang Anda cari, atau mungkin telah dipindahkan
                atau diubah nama.</p>
        </div>
        <div><a class="btn btn-primary btn-lg" href="{{ route('login') }}">KEMBALI KE HALAMAN UTAMA</a></div>
    </div>
@endsection
