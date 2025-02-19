@extends('layouts.simple.master')

@section('title', 'Roles Management')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Roles Management</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Laravel Example</li>
                        <li class="breadcrumb-item active">Roles Management</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-xxl-6 box-col-12">
                <div class="card role-management">
                    <div class="card-body ">
                        <div class="blog-card">
                            <div class="blog-card-content">
                                <div class="role-details">
                                    
                                    @php
                                        $image = auth()->user()->getFirstMedia('image');
                                    @endphp

                                    @isset($image)
                                        <div class="role-profile">
                                            <img src="{{ $image?->getUrl() }}" alt="Image">
                                        </div>
                                    @else
                                        <div class="role-profile">
                                            <img src="{{ asset('assets/images/dashboard/user/user.png') }}" alt="Image">
                                        </div>
                                    @endisset
                                    
                                    <div class="role-profile-details">
                                        <h3>Welcome back {{ \Illuminate\Support\Str::title(auth()->user()->first_name ?? '') }} {{ \Illuminate\Support\Str::title(auth()->user()->last_name ?? '') }}!</h3>
                                    </div>
                                </div>
                                <div class="blog-tags">
                                    <div class="tags-icon bg-primary">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#multi-user') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter">{{ \App\Models\User::where('system_reserve', false)->count() }}</h2>
                                        <p>Total Users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-image">
                            <img src="{{ asset('assets/images/role-management.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 box-col-6">
              <div class="card">
                <div class="card-body">
                    <div class="btn-light1-primary b-r-15">
                        <div class="upcoming-box">
                            <div class="upcoming-icon bg-primary">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                            </div>
                            <p>Role</p>
                            <a href="{{ route('admin.role.create') }}" class="btn btn-primary">{{ __('Add Role') }}</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6 box-col-6 tag-card">
                <div class="card"> 
                    <div class="card-body">
                        <div class="btn-light1-secondary b-r-15">
                            <div class="upcoming-box">
                                <div class="upcoming-icon bg-secondary">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#user-plus') }}"></use>
                                    </svg>
                                </div> 
                                <p>User</p>
                                <a href="{{ route('admin.user.create') }}" class="btn btn-secondary">{{ __('Add User') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            {!! $dataTable->table() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <!-- calendar js-->
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
    {!! $dataTable->scripts() !!}
@endsection
