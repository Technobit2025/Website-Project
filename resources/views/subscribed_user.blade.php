@extends('layouts.simple.master')

@section('title', 'Subscribed User')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/autoFill.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/keyTable.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fixedHeader.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rowReorder.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Subscribed User</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active"> Subscribed User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid subscribed-user">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Newsletter Subscribed</h5>
                        </div>
                    </div>
                    <div class="card-body pt-0 px-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="subscribed-user-wrapper">
                                    <div class="recent-table table-responsive custom-scrollbar">
                                        <table class="table" id="subscribed-user-wrapper">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th> <span class="c-o-light f-w-600">Email ID</span></th>
                                                    <th> <span class="c-o-light f-w-600">Subscription Date</span></th>
                                                    <th> <span class="c-o-light f-w-600">Status</span></th>
                                                    <th> <span class="c-o-light f-w-600">Action</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">keegan@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb 2024 03:21:45 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">creed@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">11 Mar 2024 02:23:12 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Unsubscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">kelly@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">08 Apr 2024 05:25:30 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">zyaire@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">24 Jan 2023 02:05:02 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">elyse@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">18 Dec 2024 08:12:26 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Unsubscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">bianca@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">28 Jan 2024 12:04:19 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Unsubscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">delilah@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">22 Nov 2024 03:22:20 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">damir@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">25 Jan 2024 08:12:18 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Unsubscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">ruby@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">18 Dec 2024 12:23:20 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">olivia@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">22 Mar 2024 07:12:30 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">casey@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">09 Aug 2022 05:00:00 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">heath@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">12 Dec 2021 11:10:00 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Unsubscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">jason@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">10 Sep 2023 06:13:25 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">adley@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">15 Sep 2020 01:30:00 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">janelle@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">20 Jan 2021 06:35:00 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Unsubscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">eliana@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">28 Mar 2024 09:15:23 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">westin@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">12 May 2023 11:22:00 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Unsubscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">adan@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">18 Dec 2024 09:15:59 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Unsubscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">maria@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">20 Jun 2022 11:10:20 PM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Subscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"> </i></a></td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">baylee@gmail.com</a></td>
                                                    <td>
                                                        <p class="c-o-light">22 Apr 2024 07:16:28 AM</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Unsubscribe</span></td>
                                                    <td> <a class="square-white" href="#!" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Change Status"><i
                                                                class="fa-solid fa-arrows-rotate"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.autoFill.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/autoFill.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.keyTable.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/keyTable.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/fixedHeader.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/rowReorder.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
