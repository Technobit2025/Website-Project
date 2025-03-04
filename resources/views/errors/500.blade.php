@extends('layouts.error_layouts.master')

@section('title', 'Kesalahan Server')

@section('main_content')
    <div class="container">
        <svg>
            <use href="{{ asset('assets/svg/icon-sprite.svg#error-500') }}"></use>
        </svg>
        <div class="col-md-8 offset-md-2">
            <h1>500</h1>
            <h3>Kesalahan Server</h3>
            <p class="sub-content">Server tidak dapat memproses permintaan Anda karena terjadi kesalahan.</p>
        </div>
        <div><a class="btn btn-primary btn-lg" href="{{ route('login') }}">KEMBALI KE HALAMAN UTAMA</a></div>
    </div>
@endsection
