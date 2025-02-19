@extends('layouts.simple.master')

@section('title', 'Users Management')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Users Management</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users Management</li>
                        <li class="breadcrumb-item active">Users Management</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-2 col-md-4 box-col-4">
                <div class="card user-management">
                    <div class="card-body bg-primary">
                        <div class="blog-card p-0">
                            <div class="blog-card-content">
                                <div class="blog-tags">
                                    <div class="tags-icon">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter">{{ Spatie\Permission\Models\Role::where('system_reserve', false)->count() }}</h2>
                                        <p>Total Roles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-md-8 box-col-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Users by Role</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="total-num counter">
                                    @php
                                        $roles = Spatie\Permission\Models\Role::where('system_reserve', false)->with('users')->latest()->take(7)->get();
                                    @endphp
                                    <div class="d-flex by-role custom-scrollbar">
                                        @foreach ($roles as $role)
                                            <div>
                                                <div class="total-user bg-light-primary">
                                                    <h5> {{ $role->name }} </h5>
                                                    <span class="total-num counter">{{ sprintf("%02d",$role->users->count()) }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-sm-6 box-col-6">
               <div class="card user-role">
                    <div class="card-body">
                        <div class="btn-light1-primary b-r-15">
                            <div class="upcoming-box">
                                <div class="upcoming-icon bg-primary">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#user-plus') }}"></use>
                                    </svg>
                                </div>
                                <p>User</p>
                                <a href="{{ route('admin.user.create') }}" class="btn btn-primary">{{ __('Add User') }}</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <div class="col-xxl-2 col-sm-6 box-col-6 tag-card">
                <div class="card user-role">
                    <div class="card-body">
                        <div class="btn-light1-secondary b-r-15">
                            <div class="upcoming-box">
                                <div class="upcoming-icon bg-secondary">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                    </svg>
                                </div>
                                <p>Role</p>
                                <a href="{{ route('admin.role.create') }}" class="btn btn-secondary">{{ __('Add Role') }}</a>
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
    {!! $dataTable->scripts() !!}
@endsection
