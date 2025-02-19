@extends('layouts.simple.master')

@section('title', 'User List')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('main_content')
 <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>User List</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Users</li>
                                    <li class="breadcrumb-item active">User List</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div><!-- Container-fluid starts-->
                <div class="container-fluid user-list-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header card-no-border text-end">
                                    <div class="card-header-right-icon"><a class="btn btn-primary f-w-500"
                                            href="{{ route('admin.add_user') }}"><i class="fa-solid fa-plus pe-2"></i>Add User</a></div>
                                </div>
                                <div class="card-body pt-0 px-0">
                                    <div class="list-product user-list-table">
                                        <div class="table-responsive custom-scrollbar">
                                            <table class="table" id="roles-permission">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th> <span class="c-o-light f-w-600">Name</span></th>
                                                        <th> <span class="c-o-light f-w-600">Email</span></th>
                                                        <th> <span class="c-o-light f-w-600">Role</span></th>
                                                        <th> <span class="c-o-light f-w-600">Creation Date</span></th>
                                                        <th> <span class="c-o-light f-w-600">Status</span></th>
                                                        <th> <span class="c-o-light f-w-600">Actions</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Holly Snow</a></td>
                                                        <td>
                                                            <p>holly.snow@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Consumer</p>
                                                        </td>
                                                        <td>
                                                            <p>15 Feb 2024,04:20 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Amalia Wood</a></td>
                                                        <td>
                                                            <p>amalia.wood@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Admin</p>
                                                        </td>
                                                        <td>
                                                            <p>20 Mar 2024,06:12 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Noel Fuller</a></td>
                                                        <td>
                                                            <p>noel.fuller@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Community Manager</p>
                                                        </td>
                                                        <td>
                                                            <p>05 Apr 2024,08:28 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Arjun Duke</a></td>
                                                        <td>
                                                            <p>arjun.duke@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Content Editors</p>
                                                        </td>
                                                        <td>
                                                            <p>28 Dec 2024,12:05 PM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Arlo Cox</a></td>
                                                        <td>
                                                            <p>arlo.cox@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Registered Users</p>
                                                        </td>
                                                        <td>
                                                            <p>28 Apr 2024,02:35 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-warning">Pending</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Vivian Gould</a></td>
                                                        <td>
                                                            <p>vivian.gould@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Subscribers</p>
                                                        </td>
                                                        <td>
                                                            <p>29 Dec 2024,09:05 PM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Lydia Hart</a></td>
                                                        <td>
                                                            <p>lydia.hart@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Translator</p>
                                                        </td>
                                                        <td>
                                                            <p>29 Apr 2024,09:48 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Oakley Ali</a></td>
                                                        <td>
                                                            <p>oakley.ali@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Unverified Users</p>
                                                        </td>
                                                        <td>
                                                            <p>10 Feb 2024,08:29 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-warning">Pending</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Elias Romero</a></td>
                                                        <td>
                                                            <p>elias.romero@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Vendor</p>
                                                        </td>
                                                        <td>
                                                            <p>15 Feb 2024,04:20 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-warning">Pending</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Isaias Robles</a></td>
                                                        <td>
                                                            <p>isaias.robles@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Admin</p>
                                                        </td>
                                                        <td>
                                                            <p>28 Dec 2024,12:00 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Arjun Duke</a></td>
                                                        <td>
                                                            <p>arjun.duke@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Community Manager</p>
                                                        </td>
                                                        <td>
                                                            <p>28 Apr 2024,09:45 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-warning">Pending</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Aden Cline</a></td>
                                                        <td>
                                                            <p>aden.cline@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Consumer</p>
                                                        </td>
                                                        <td>
                                                            <p>30 Jan 2024,07:28 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Kye Lindsey</a></td>
                                                        <td>
                                                            <p>kye.lindsey@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Content Editors</p>
                                                        </td>
                                                        <td>
                                                            <p>25 May 2024,08:45 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Jase Barajas</a></td>
                                                        <td>
                                                            <p>jase.barajas@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Registered Users</p>
                                                        </td>
                                                        <td>
                                                            <p>27 Dec 2024,02:10 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-warning">Pending</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Alora Brock</a></td>
                                                        <td>
                                                            <p>alora.brock@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Subscribers</p>
                                                        </td>
                                                        <td>
                                                            <p>28 Feb 2024,08:30 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Elle Hubbard</a></td>
                                                        <td>
                                                            <p>elle.hubbard@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Unverified Users</p>
                                                        </td>
                                                        <td>
                                                            <p>12 Mar 2024,07:28 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-success">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Rose Garcia</a></td>
                                                        <td>
                                                            <p>rose.garcia@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Translator</p>
                                                        </td>
                                                        <td>
                                                            <p>28 Dec 2024,07:30 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-warning">Pending</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Jay Weber</a></td>
                                                        <td>
                                                            <p>jay.weber@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Community Manager</p>
                                                        </td>
                                                        <td>
                                                            <p>03 Feb 2024,02:15 PM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-warning">Pending</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Javier Mann</a></td>
                                                        <td>
                                                            <p>javier.mann@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Unverified Users</p>
                                                        </td>
                                                        <td>
                                                            <p>16 Sep 2024,04:25 AM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-warning">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="product-removes inbox-data">
                                                        <td></td>
                                                        <td> <a href="{{ route('admin.user_profile') }}">Jon Pruitt</a></td>
                                                        <td>
                                                            <p>jon.pruitt@gmail.com</p>
                                                        </td>
                                                        <td>
                                                            <p>Community Manager</p>
                                                        </td>
                                                        <td>
                                                            <p>20 Nov 2024,08:45 PM</p>
                                                        </td>
                                                        <td> <span class="badge badge-light-warning">Active</span></td>
                                                        <td>
                                                            <div class="common-align gap-2 justify-content-start"> <a
                                                                    class="square-white" href="{{ route('admin.add_user') }}"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                        </use>
                                                                    </svg></a><a class="square-white trash-7"
                                                                    href="#!"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                        </use>
                                                                    </svg></a></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/trash_popup.js') }}"></script>
    <script src="{{ asset('assets/js/common-check.js') }}"></script>
@endsection
