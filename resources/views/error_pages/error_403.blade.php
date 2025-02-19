@extends('layouts.error_layouts.master')

@section('title', 'Error 403')

@section('main_content')
    <div class="container">
          <svg> 
            <use href="{{ asset('assets/svg/icon-sprite.svg#error-403') }}"></use>
          </svg>
          <div class="col-md-8 offset-md-2">
            <h3>Forbidden Error</h3>
            <p class="sub-content">If you receive a 403 Forbidden error, either verify your access privileges or get in touch with the server administrator to obtain the necessary authorization.</p>
          </div>
          <div><a class="btn btn-primary btn-lg" href="{{ route('admin.default_dashboard') }}">BACK TO HOME PAGE</a></div>
        </div>
@endsection
