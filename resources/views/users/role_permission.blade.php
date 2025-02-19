@extends('layouts.simple.master')

@section('title', 'Roles & Permission')

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
                    <h3>Roles & Permission</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Roles & Permission</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid role-permission-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-no-border text-end">
                        <div class="card-header-right-icon"><a class="btn btn-primary f-w-500" href="#!"
                                data-bs-toggle="modal" data-bs-target="#rolePermission"><i class="fa fa-plus pe-2"></i>Add
                                Permission</a></div>
                    </div>
                    <div class="card-body pt-0 px-0">
                        <div class="list-product permission-table">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table" id="roles-permission">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Role Name</span></th>
                                            <th> <span class="c-o-light f-w-600">Creation Date</span></th>
                                            <th> <span class="c-o-light f-w-600">Last Updated Date</span>
                                            </th>
                                            <th> <span class="c-o-light f-w-600">Status</span></th>
                                            <th> <span class="c-o-light f-w-600">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <p>Vendor</p>
                                            </td>
                                            <td>
                                                <p>13 Jan 2024,06:45 AM</p>
                                            </td>
                                            <td>
                                                <p>15 Feb 2024,04:20 AM</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-6" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <p>Admin</p>
                                            </td>
                                            <td>
                                                <p>10 Feb 2023,01:12 PM</p>
                                            </td>
                                            <td>
                                                <p>15 Feb 2024,08:21 AM</p>
                                            </td>
                                            <td> <span class="badge badge-light-warning">Pending</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-6" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <p>Community Manager</p>
                                            </td>
                                            <td>
                                                <p>05 Mar 2024,04:30 PM</p>
                                            </td>
                                            <td>
                                                <p>20 Apr 2024,11:20 AM</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-6" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <p>Content Editors</p>
                                            </td>
                                            <td>
                                                <p>16 Apr 2024,09:18 PM</p>
                                            </td>
                                            <td>
                                                <p>17 May 2024,08:00 AM</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-6" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <p>Subscribers</p>
                                            </td>
                                            <td>
                                                <p>14 May 2024,05:25 AM</p>
                                            </td>
                                            <td>
                                                <p>22 Jun 2024,10:12 AM</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-6" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <p>Consumer</p>
                                            </td>
                                            <td>
                                                <p>21 Aug 2024,11:18 PM</p>
                                            </td>
                                            <td>
                                                <p>05 Sep 2024,06:25 AM</p>
                                            </td>
                                            <td> <span class="badge badge-light-warning">Pending</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-6" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <p>Registered Users</p>
                                            </td>
                                            <td>
                                                <p>25 Dec 2024,07:12 AM</p>
                                            </td>
                                            <td>
                                                <p>28 Jan 2024,11:20 AM</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-6" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <p>Unverified Users</p>
                                            </td>
                                            <td>
                                                <p>18 Dec 2023,09:00 PM</p>
                                            </td>
                                            <td>
                                                <p>20 Jan 2024,05:05 PM</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-6" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <p>Translator</p>
                                            </td>
                                            <td>
                                                <p>29 Feb 2024,08:30 AM</p>
                                            </td>
                                            <td>
                                                <p>02 Mar 2024,10:30 PM</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-6" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
        <div class="modal fade" id="rolePermission" tabindex="-1" aria-labelledby="rolePermission" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content category-popup">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modaldashboard">Create Role</h5><button class="btn-close"
                            type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body custom-input">
                        <div class="row">
                            <div class="col">
                                <div class="mb-lg-3 row mb-4 g-lg-3 g-2">
                                    <div class="col-md-2"><label class="form-label mb-0" for="validationName">Name <span
                                                class="txt-danger">*</span></label></div>
                                    <div class="col-md-10"><input class="form-control" id="validationName"
                                            type="text" placeholder="Enter name" required=""></div>
                                </div>
                                <div class="row g-lg-3 g-2">
                                    <div class="col-md-12"> <label class="form-label mb-0"
                                            for="validationName">Permissions <span class="txt-danger">*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="row permission-form g-2">
                                            <div class="col-12">
                                                <ul>
                                                    <li>Users</li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input check-all"
                                                                id="flexCheckDefault" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault">All</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault1" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault1">Reader</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault2" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault2">Creator</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault3" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault3">Delete</label></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <ul>
                                                    <li>Products</li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input check-all"
                                                                id="flexCheckDefault4" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault4">All</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault5" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault5">Reader</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault6" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault6">Creator</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault7" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault7">Delete</label></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <ul>
                                                    <li>FAQs</li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input check-all"
                                                                id="flexCheckDefault8" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault8">All</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault9" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault9">Reader</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault10" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault10">Creator</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault11" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault11">Delete</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <ul>
                                                    <li>Category</li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input check-all"
                                                                id="flexCheckDefault20" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault20">All</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault21" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault21">Reader</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault22" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault22">Creator</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault23" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault23">Delete</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <ul>
                                                    <li>Orders</li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input check-all"
                                                                id="flexCheckDefault24" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault24">All</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault25" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault25">Reader</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault26" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault26">Creator</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault27" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault27">Delete</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <ul>
                                                    <li>Projects</li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input check-all"
                                                                id="flexCheckDefault28" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault28">All</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault29" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault29">Reader</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault30" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault30">Creator</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault31" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault31">Delete</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <ul>
                                                    <li>Seller</li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input check-all"
                                                                id="flexCheckDefault36" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault36">All</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault37" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault37">Reader</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault38" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault38">Creator</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault39" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault39">Delete</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <ul>
                                                    <li>To-Do</li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input check-all"
                                                                id="allPermission" type="checkbox" value=""><label
                                                                class="form-check-label" for="allPermission">All</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="readerPermission" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="readerPermission">Reader</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="creatorPermission" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="creatorPermission">Creator</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="deletePermission" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="deletePermission">Delete</label></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <ul>
                                                    <li>Blog</li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input check-all"
                                                                id="flexCheckDefault56" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault56">All</label></div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault57" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault57">Reader</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault58" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault58">Creator</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexCheckDefault59" type="checkbox"
                                                                value=""><label class="form-check-label"
                                                                for="flexCheckDefault59">Delete</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 d-flex justify-content-end mt-3"><button
                                                    class="btn btn-primary" type="submit">Save </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
