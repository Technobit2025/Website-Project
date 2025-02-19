@extends('layouts.simple.master')

@section('title', 'Order History')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Order History</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active"> Order History</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid common-order-history">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3 custom-input">
                            <div class="col-xl col-md-6"> <label class="form-label" for="datetime-local">From: </label>
                                <div class="input-group flatpicker-calender"><input class="form-control" id="datetime-local"
                                        placeholder="dd/mm/yyyy"></div>
                            </div>
                            <div class="col-xl col-md-6"> <label class="form-label" for="datetime-local3">To: </label>
                                <div class="input-group flatpicker-calender"><input class="form-control"
                                        id="datetime-local3" placeholder="dd/mm/yyyy"></div>
                            </div>
                            <div class="col-xl col-md-6"><label class="form-label">Payment
                                    Status</label><select class="form-select">
                                    <option selected="">Completed</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Failed</option>
                                </select></div>
                            <div class="col-xl col-md-6"><label class="form-label">Payment
                                    Methods</label><select class="form-select">
                                    <option selected="">Paypal</option>
                                    <option value="1">COD</option>
                                    <option value="2">Bank transfer</option>
                                    <option value="3">Credit card</option>
                                </select></div>
                            <div class="col d-flex justify-content-start align-items-center m-t-40"><a
                                    class="btn btn-primary f-w-500" href="#!">Submit</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card heading-space">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>New Orders</h5>
                        </div>
                    </div>
                    <div class="card-body pt-0 px-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="order-history-wrapper">
                                    <div class="recent-table table-responsive custom-scrollbar">
                                        <table class="table" id="order-history-table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th> <span class="f-light f-w-600">Order Number</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Order Date</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Customer Name</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Total Amount</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Payment Status</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Payment Method</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Action</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="#!">#1245</a></td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb 2024 03:21:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Zakai Ramos</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$120.45 </p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Failed
                                                        </span></td>
                                                    <td>
                                                        <p class="c-o-light">COD</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1244</a></td>
                                                    <td>
                                                        <p class="c-o-light">12 Mar 2024 04:05:AM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Daxton Norris</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$478.14 </p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Paypal</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1246</a></td>
                                                    <td>
                                                        <p class="c-o-light">10 Jun 2024 02:10:AM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Sophia Kirby</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$897.00 </p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Bank Transfer</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1248</a></td>
                                                    <td>
                                                        <p class="c-o-light">28 Feb 2024 11:50:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Rylan Norton</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$200.40</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Credit Card</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1247</a></td>
                                                    <td>
                                                        <p class="c-o-light">01 Jan 2024 07:30:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Curtis Robertson</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$304.12</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Failed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Bank Transfer</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1249</a></td>
                                                    <td>
                                                        <p class="c-o-light">03 Dec 2024 05:15:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Emir David</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$140.50</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">COD</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1250</a></td>
                                                    <td>
                                                        <p class="c-o-light">09 Mar 2024 03:05:AM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Kai Jacobs</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$450.70</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Credit Card</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1251</a></td>
                                                    <td>
                                                        <p class="c-o-light">13 Apr 2024 04:28:AM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Aron Hester</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$400.05</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Paypal</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1252</a></td>
                                                    <td>
                                                        <p class="c-o-light">18 May 2024 06:00:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Jaime Ellis</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$250.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Credit Card</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1253</a></td>
                                                    <td>
                                                        <p class="c-o-light">20 Aug 2024 07:10:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Hector Torres</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$145.30</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">COD</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1254</a></td>
                                                    <td>
                                                        <p class="c-o-light">16 Sep 2024 12:10:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Saige Lucero</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$170.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Credit Card</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1255</a></td>
                                                    <td>
                                                        <p class="c-o-light">17 Oct 2024 10:40:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Remi Nelson</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$300.50</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Failed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Bank Transfer</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1256</a></td>
                                                    <td>
                                                        <p class="c-o-light">22 Nov 2024 09:05:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Ayla Tucker</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$900.14</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Paypal</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1257</a></td>
                                                    <td>
                                                        <p class="c-o-light">26 Jan 2024 08:15:AM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Aniya Davila</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$870.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Credit Card</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1302</a></td>
                                                    <td>
                                                        <p class="c-o-light">01 Jan 2024 10:25:AM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Camden Klein</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$50.14</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">COD</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1306</a></td>
                                                    <td>
                                                        <p class="c-o-light">12 Mar 2024 01:35:AM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Ezra Gentry</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$74.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Failed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Credit Card</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1310</a></td>
                                                    <td>
                                                        <p class="c-o-light">20 Apr 2024 07:00:AM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Jax Pierce</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$74.70</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">COD</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1314</a></td>
                                                    <td>
                                                        <p class="c-o-light">22 Dec 2024 09:45:AM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Yara Walsh</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$45.34</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Paypal</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1380</a></td>
                                                    <td>
                                                        <p class="c-o-light">31 May 2024 10:40:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Fox Roth</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$48.40</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Bank Transfer</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <a href="{{ route('admin.order_details') }}">#1399</a></td>
                                                    <td>
                                                        <p class="c-o-light">17 Apr 2024 08:50:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Selah Bush</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$78.48</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Failed</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Credit Card</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="{{ route('admin.order_details') }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
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
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/trash.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
