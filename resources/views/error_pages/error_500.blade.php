@extends('layouts.error_layouts.master')

@section('title', 'Error 500')

@section('main_content')
    <div class="container">
        <svg>
            <use href="{{ asset('assets/svg/icon-sprite.svg#error-500') }}"></use>
        </svg>
        <div class="col-md-8 offset-md-2">
            <h3>Server Error</h3>
            <p class="sub-content">The server couldn't finish processing your request due to an error.</p>
        </div>
        <div><a class="btn btn-primary btn-lg" href="{{ route('admin.default_dashboard') }}">BACK TO HOME PAGE</a></div>
    </div>
@endsection
